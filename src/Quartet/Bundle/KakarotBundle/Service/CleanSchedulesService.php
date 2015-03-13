<?php

namespace Quartet\Bundle\KakarotBundle\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\NoResultException;

use Quartet\Bundle\KakarotBundle\Entity\CleanSchedule;


class CleanSchedulesService
{
    /**
     * EntityManager;
     */
    private $em;

    /**
     * コンストラクタ
     * @param $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * 掃除当番取得
     * @param array $oneWeekHoledays
     * @param $loginUser
     * @return array $cleanSchedules
     */
    public function getCleanSchedules(array $oneWeekHoledays, $loginUser)
    {
        if (0 === count($oneWeekHoledays)) {
            throw new \LogicException("oneWeekHoledaysの値がありません。");
        }

        if (null === $loginUser) {
            throw new \LogicException("loginUserの値がありません。");
        }

        $cleanSchedules = array();

        $userEntities = $this->em->getRepository('QuartetKakarotBundle:User')->findAll();

        foreach ($oneWeekHoledays as $day) {
            $userEntity = null;
            $cleanSchedulesEntities = $this->em->getRepository('QuartetKakarotBundle:CleanSchedule')->findBy(array('date' => new \DateTime($day['date']. ' 00:00:00')));
            // 登録データがないとき
            if (!$cleanSchedulesEntities) {
                $userEntity = $this->registerCleanSchedule($day, $userEntities);
            // 登録データがあるとき
            } else {
                foreach ($userEntities as $users) {
                    if (!$cleanSchedulesEntities[0]->getUser()) {
                        $userEntity = null;
                    } elseif ($users->getId() === $cleanSchedulesEntities[0]->getUser()->getId()) {
                        $userEntity = $users;
                        break;
                    }
                }
            }


            $cleanSchedules[] = array(
                'date'     => $day['date'],
                'dayname'  => $day['dayname'],
                'name'     => $userEntity ? $userEntity->getName() : '-',
                'holiday'  => $day['holiday'],
                'login'    => $userEntity && $userEntity->getId() === $loginUser ? 1 : 0,
                );
        }

        return $cleanSchedules;
    }

    /**
     * 先週の最後のユーザーから順番を取得する
     * @param userEntities
     * @return integer userNumber
     */
    private function getUserNumber(array $userEntities)
    {
        // 先週の最後のユーザー取得
        $lastIds = $this->em->createQuery('SELECT IDENTITY(c.user) FROM QuartetKakarotBundle:CleanSchedule c WHERE c.user is not NULL ORDER BY c.id DESC')
                        ->setMaxResults(1);
        $userNumber = 0;
        try {
            foreach ($lastIds->getSingleResult() as $value) {
                $lastId = $value;
                break;
            }

            foreach ($userEntities as $value) {
                if ($value->getId() == $lastId) {
                    $userNumber++;
                    break;
                }
                $userNumber++;
            }
        }
        catch (NoResultException $e) {
            $userNumber = 0;
        }

        return $userNumber;
    }

    /**
     * ゴミ捨て当番・掃除当番データ新規作成
     * @param $day
     * @param $userEntities
     * @return User userEntity
     */
    private function registerCleanSchedule($day, array $userEntities)
    {
        $clean = new CleanSchedule();
        $userEntity = null;

        // ユーザー順番取得
        $userNumber = $this->getUserNumber($userEntities);

        while (true) {
            // 休みの日のとき
            if (true === $day['holiday']) {
                break;
            }

            // 順番が最後尾になったとき
            if (count($userEntities) <= $userNumber) {
                $userEntity = $userEntities[0];
                $userNumber = 1;
            } else {
            // 順番通りのとき
                $userEntity = $userEntities[$userNumber];
                $userNumber = $userNumber + 1;
            }

            // 掃除当番　不可能日チェック
            $flag = 0;
            $daySettingEntities = $this->em->getRepository('QuartetKakarotBundle:DaySetting')->findBy(array('user' => $userEntity->getId(), 'type' => 'clean'));
            foreach ($daySettingEntities as $daySetting) {
                if (true === $daySetting->getSelected() && $day['dayId'] === $daySetting->getDay()->getId()) {
                    $flag = 1;
                    break;
                }
            }
            if (1 === $flag) {
                continue;
            }

            break;
        }

        // 新規データ登録
        if (true === $day['holiday']) {
            $clean->setUser(null);
            $clean->setDate(new \DateTime($day['date']. ' 00:00:00'));
        } else {
            $clean->setUser($userEntity);
            $clean->setDate(new \DateTime($day['date']. ' 00:00:00'));
        }

        $this->em->persist($clean);
        $this->em->flush();

        return $userEntity;
    }
}