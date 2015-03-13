<?php

namespace Quartet\Bundle\KakarotBundle\Service;

use Doctrine\ORM\EntityManager;
use Quartet\Bundle\KakarotBundle\Entity\HolidaysCalendar;
use Quartet\Bundle\KakarotBundle\Service\GoogleCalendar;


/**
 * 休日カレンダー用サービス
 */
class HolidaysCalendarService
{
    /**
     * EntityManager;
     */
    private $em;

    /**
     * google calendarサービス
     */
    private $googleCalendar;


    /**
     * コンストラクタ
     * @param $entityManager
     * @param $googleCalendar
     */
    public function __construct(EntityManager $entityManager, GoogleCalendar $googleCalendar)
    {
        $this->em = $entityManager;
        $this->googleCalendar = $googleCalendar;
    }


    /**
     * Googleカレンダーから取得した祝日を登録する。
     * @param $year
     */
    public function registerGoogleCalendar($year)
    {
        $holidays = $this->googleCalendar->getYearGoogleCalendar($year);
        $holidayRepository = $this->em->getRepository('QuartetKakarotBundle:HolidaysCalendar');

        foreach ($holidays as $key => $value) {
            $holidayCalendar = new HolidaysCalendar();
            $holidayCalendar->setDate(new \DateTime($key));
            $holidayCalendar->setName($value);
            if (!$holidayRepository->isNewFindDate($holidayCalendar)) {
                $this->em->persist($holidayCalendar);
                $this->em->flush();
            }
        }
    }
}