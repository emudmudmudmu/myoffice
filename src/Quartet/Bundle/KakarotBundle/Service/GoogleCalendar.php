<?php

namespace Quartet\Bundle\KakarotBundle\Service;

use Doctrine\ORM\EntityManager;

use Quartet\Bundle\KakarotBundle\Entity\HolidaysCalendar;
use Quartet\Bundle\KakarotBundle\Exception\GoogleCalendarException;


class GoogleCalendar
{
    /**
     * PHPは、日・月・火・水・木・金・土の順に取得されるので、変換用のテーブルを作成する
     */
    private $php2kakarotWeeks = array(6, 0, 1, 2, 3, 4, 5);

    /**
     * EntityManager;
     */
    private $em;

    /**
     * 祝日データ
     */
    private $holidaysData;


    /**
     * コンストラクタ
     * @param $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * googleから祝日データを取得する。
     */
    public function initialize()
    {
        // Google カレンダーから祝日データを取得.
        $results = $this->getGoogleCalendar(
            date('Y-m-d', strtotime('first day of last month')),
            date('Y-m-d', strtotime('last day of next month')));


        $this->holidaysData = array();
        foreach ($results['feed']['entry'] as $val) {
            $date = $val['gd$when'][0]['startTime'];
            $this->holidaysData[] = $date;
        }
        asort($this->holidaysData);
    }

    /**
     * １ヶ月分の祝日データを取得する。
     * @return array
     */
    public function getMonthHolidays()
    {
        if (null == $this->holidaysData || !is_array($this->holidaysData)) {
            throw new \LogicException('initialize()を実行する前にgetMonthHolidays()を実行しています。');
        }

        $days = $this->em->getRepository('QuartetKakarotBundle:Day')->findAll();

        // 祝日テーブル １ヶ月
        $currentDate = date('Y-m-1');
        $currentDay = date("w", strtotime($currentDate));
        $lastDate = date("Y-m-".date('t', mktime(0,0,0,date('m',strtotime($currentDate)), 1, date('Y',strtotime($currentDate)))));
        // 先月の最終週分を取得
        while (true) {
            if ($this->php2kakarotWeeks[date("w", strtotime($lastDate))] == 6) {
                break;
            }
            $lastDate = date('Y-m-d', strtotime($lastDate. ' +1 day'));
        }

        // 先月の最終週＋１ヶ月まで取得
        $holidays = array();
        for ($i = 1; $i <= 37; $i++) {

            // 最終日を超えたとき
            if ( strtotime($currentDate) > strtotime($lastDate) ) {
                break;
            }

            $holidays[] = array(
                'date'    => date('m/d', strtotime($currentDate)),
                'holiday' => in_array($currentDate, $this->holidaysData),
                'dayname' => $days[$this->php2kakarotWeeks[$currentDay]]->getName(),
                'dayId'   => $days[$this->php2kakarotWeeks[$currentDay]]->getId(),
                );
            if($currentDay >= 6){
                $currentDay = 0;
            } else {
                $currentDay++;
            }
            $currentDate = date('Y-m-d', strtotime($currentDate. ' +1 day'));
        }

        return $holidays;
    }

    /**
     * 月曜日から金曜日までの祝日データを取得する。
     * @return array oneWeekHoledays
     */
    public function getOneWeekHolidays()
    {
        if (null == $this->holidaysData || !is_array($this->holidaysData)) {
            throw new \LogicException('initialize()を実行する前にgetOneWeekHolidays()を実行しています。');
        }

        $days = $this->em->getRepository('QuartetKakarotBundle:Day')->findAll();

        // 祝日 １周間
        $tempDays = array(
            date('Y-m-d', strtotime('next Monday') - 7*24*3600),
            date('Y-m-d', strtotime('next Monday') - 6*24*3600),
            date('Y-m-d', strtotime('next Monday') - 5*24*3600),
            date('Y-m-d', strtotime('next Monday') - 4*24*3600),
            date('Y-m-d', strtotime('next Monday') - 3*24*3600),
            );

        // 曜日５日分
        $index = 0;
        $oneWeekHoledays = array();
        foreach ($days as $day) {
            $oneWeekHoledays[] = array(
                'date'    => $tempDays[$index],
                'holiday' => in_array($tempDays[$index], $this->holidaysData),
                'dayname' => $day->getName(),
                'dayId'   => $day->getId()
                );
            $index++;
            if ($index > 4) {
                break;
            }
        }

        return $oneWeekHoledays;
    }

    /**
     * 月曜日から日曜日までのヘッダーを取得する。
     * @return array allDays
     */
    public function getOneWeekHeader()
    {
        $days = $this->em->getRepository('QuartetKakarotBundle:Day')->findAll();

        // 曜日１周間分
        $allDays = array();
        foreach ($days as $day) {
            $allDays[] = array(
                'name'    => $day->getName(),
                );
        }

        return $allDays;
    }

    /**
     * googleから1年分の祝日データを取得する。
     * @param $year
     * @param array
     */
    public function getYearGoogleCalendar($year)
    {
        if (null == $year) {
            throw new \LogicException('$yearにnullが設定されています。');
        }

        // Google カレンダーから祝日データを取得.
        $results = $this->getGoogleCalendar($year. '-01-01', $year. '-12-31');

        foreach ($results['feed']['entry'] as $value) {
            $titles = explode(' / ', $value['title']['$t']);
            $holidays[$value['gd$when'][0]['startTime']] = $titles[0];
        }

        ksort($holidays);

        return $holidays;
    }

    /**
     * googleから祝日データを取得する。
     * @param $year
     * @param array
     */
    private function getGoogleCalendar($startDate, $endDate)
    {
        // Google カレンダーから祝日データを取得.
        $holidaysUrl = sprintf(
            'http://www.google.com/calendar/feeds/%s/public/full-noattendees?start-min=%s&start-max=%s&max-results=%d&alt=json',
            'outid3el0qkcrsuf89fltf7a4qbacgt9@import.calendar.google.com',  // japanese@holiday.calendar.google.com
            $startDate,                                                     // 取得開始日.
            $endDate,                                                       // 取得終了日.
            50                                                              // 最大取得数.
        );

        if ($results = file_get_contents($holidaysUrl)) {
            $results = json_decode($results, true);

            if (null == $results || 0 == count($results)) {
                throw new GoogleCalendarException('googleから祝日情報の取得に失敗しました。');
            }
        }

        return $results;
    }
}