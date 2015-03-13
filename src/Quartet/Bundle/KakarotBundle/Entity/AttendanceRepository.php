<?php

namespace Quartet\Bundle\KakarotBundle\Entity;

use Doctrine\ORM\EntityRepository;

use Quartet\Bundle\KakarotBundle\Entity\User;


/**
 * AttendanceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AttendanceRepository extends EntityRepository
{
    /**
     * 指定の月の登録情報を取得する。
     * @param $date
     * @return $entities
     */
    public function getEntities(User $userEntity, $date)
    {
        $firstDay = $date. '-01';
        $lastDay = date('Y-m-d', strtotime($date. ' last day +1 month'));

        $entities = $this->createQueryBuilder('a')
            ->where('a.date >= :firstDay')
            ->setParameter('firstDay', $firstDay)
            ->andwhere('a.date <= :lastDay')
            ->setParameter('lastDay', $lastDay)
            ->orderby('a.date', 'ASC')
            ->andwhere('a.user = :userid')
            ->setParameter('userid', $userEntity->getId())
            ->getQuery()
            ->getResult();

        return $entities;
    }

    /**
     * 新規データを取得します。
     * @return attendanceEntity
     */
    public function getNewAttendance()
    {
        $attendanceEntity = new Attendance();
        $attendanceEntity->setDate(new \DateTime());
        $attendanceEntity->setAttended(new \DateTime('09:00'));
        $attendanceEntity->setReturned(new \DateTime());

        $break1Started = new \DateTime('13:00');
        if ($attendanceEntity->getReturned() >= $break1Started) {
            $attendanceEntity->setBreak1Started(new \DateTime('12:00'));
            $attendanceEntity->setBreak1Ended(new \DateTime('13:00'));
        }

        $break2Started = new \DateTime('18:30');
        if ($attendanceEntity->getReturned() >= $break2Started) {
            $attendanceEntity->setBreak2Started(new \DateTime('18:00'));
            $attendanceEntity->setBreak2Ended(new \DateTime('18:30'));
        }

        return $attendanceEntity;
    }

    /**
     * 新規登録時に、同一日が登録されているか確認する
     * @param attendanceEntity
     * @param boolean true: 同一日あり, false: 同一日なし
     */
    public function isNewFindSameDate(Attendance $attendanceEntity)
    {
        return $this->isFindSameDate($attendanceEntity, 'new');
    }

    /**
     * 編集時に、同一日が登録されているか確認する
     * @param attendanceEntity
     * @param boolean true: 同一日あり, false: 同一日なし
     */
    public function isEditFindSameDate(Attendance $attendanceEntity)
    {
        return $this->isFindSameDate($attendanceEntity, 'edit');
    }

    /**
     * 編集時に、同一日が登録されているか確認する
     * @param attendanceEntity
     * @param type : new or edit
     * @param boolean true: 同一日あり, false: 同一日なし
     */
    private function isFindSameDate(Attendance $attendanceEntity, $type)
    {
        $query = $this->createQueryBuilder('a')
            ->where('a.user = :user')
            ->setParameter('user', $attendanceEntity->getUser()->getId())
            ->andwhere('a.date = :date')
            ->setParameter('date', $attendanceEntity->getDate()->format('Y-m-d'));
        if ('edit' == $type) {
            $query->andwhere('a.id != :id')
                ->setParameter('id', $attendanceEntity->getId());
        }

        $entity = $query->getQuery()->getResult();

        if (0 != count($entity)) {
            return true;
        }

        return false;
    }

    /**
     * 未入力日の確認を行う
     * @param $date
     * @return $message
     */
    public function getNotInputDateMessage(User $userEntity, $date)
    {
        $message = null;

        $currentDay = $date. '-01';
        $lastDay = date('Y-m-d');

        // 祝日を取得
        $holidays = $this->getHolidaysArray($currentDay, $lastDay);

        while ($currentDay <= $lastDay) {
            // 土曜日・日曜日以外
            $day = date('w', strtotime($currentDay));
            if (0 != $day && 6 != $day) {
                // 祝日ではないとき
                if (!in_array($currentDay, $holidays)) {
                    $attendanceEntity = $this->createQueryBuilder('a')
                        ->where('a.date = :date')
                        ->setParameter('date', $currentDay)
                        ->andwhere('a.user = :userid')
                        ->setParameter('userid', $userEntity->getId())
                        ->getQuery()
                        ->getResult();
                    if (0 == count($attendanceEntity)) {
                        if ($message) {
                            $message = $message . ', ' . date('m/d', strtotime($currentDay));
                        } else {
                            $message = date('m/d', strtotime($currentDay));
                        }
                    }
                }
            }

            $currentDay = date('Y-m-d', strtotime($currentDay. ' +1 day'));
        }

        if ($message) {
            $message = '未入力日があります。 ' . $message;
        }

        return $message;
    }

    /**
     * 指定した期間の祝日情報を取得する
     * @param $firstDay
     * @param $lastDay
     * @param array
     */
    private function getHolidaysArray($firstDay, $lastDay)
    {
        // 祝日を取得
        $holodaysEntities = $this->getEntityManager()->getRepository('QuartetKakarotBundle:HolidaysCalendar')
            ->createQueryBuilder('h')
            ->where('h.date >= :firstDay')
            ->setParameter('firstDay', $firstDay)
            ->andwhere('h.date <= :lastDay')
            ->setParameter('lastDay', $lastDay)
            ->orderby('h.date', 'ASC')
            ->getQuery()
            ->getResult();

        $holidays = array();
        foreach ($holodaysEntities as $value) {
            $holidays[] = $value->getDate()->format('Y-m-d');
        }

        return $holidays;
    }
}