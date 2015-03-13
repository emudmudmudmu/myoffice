<?php

namespace Quartet\Bundle\KakarotBundle\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\NoResultException;

use Quartet\Bundle\KakarotBundle\Entity\BlogSchedule;


/**
 * 知っ得メンバーを取得する
 */
class BlogSchedulesService
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
     * コンストラクタ
     * @param $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }


    /**
     * 知っ得メンバーを取得する
     * @param array $monthHolidays
     * @param $loginUser
     * @return array $blogSchedules
     */
    public function getBlogSchedules(array $monthHolidays, $loginUser)
    {
        if (null == $monthHolidays || 0 == count($monthHolidays)) {
            throw new \LogicException("monthHolidaysの値がありません。");
        }

        if (null == $loginUser) {
            throw new \LogicException("loginUserの値がありません。");
        }

        $userEntities = $this->em->getRepository('QuartetKakarotBundle:User')->findAll();

        // 最後の登録情報から次の順番のユーザー順を取得
        $userIndex = $this->getUserIndex($userEntities);

        // 月の初めを取得
        $currentDate = date('Y-m-1');
        $currentDay = $this->php2kakarotWeeks[date("w", strtotime($currentDate))];

        $blogSchedules = array();
        $daysData= array();

        // 月の初めが月曜日以外のときは、空のデータを設定する
        if ($currentDay > count($daysData)) {
            for ($i = 0; $i < $currentDay; $i++) {
                $daysData[] = array(
                    'username' => '',
                    'date'     => '',
                    'login'    => 0,
                    'holiday'  => 0,
                    'user'     => null,
                    'userDate' => null,
                );
            }
        }

        foreach ($monthHolidays as $day) {
            $blogEntity = $this->em->getRepository('QuartetKakarotBundle:BlogSchedule')->findBy(array('date' => new \DateTime($currentDate.' 00:00:00')));

            // 休日のとき
            if ($day['holiday'] || 5 == $currentDay || 6 == $currentDay || (null != $blogEntity && null == $blogEntity[0]->getUser())) {
                    if (null == $blogEntity) {
                        $blogEntity = new BlogSchedule();
                        $blogEntity->setDate(new \DateTime($currentDate. ' 00:00:00'));
                        $blogEntity->setUser(null);
                        $this->em->persist($blogEntity);
                        $this->em->flush();
                    }

                    $daysData[] = array(
                        'username' => '',
                        'date'     => date('d', strtotime($currentDate)),
                        'login'    => 0,
                        'holiday'  => 1,
                        'user'     => null,
                        'userDate' => null,
                    );
            } else {
                // 新規作成
                if (null == $blogEntity) {
                    // 知っ得対象外のとき
                    $daySettingEntities = $this->em->getRepository('QuartetKakarotBundle:DaySetting')->findBy(array('user' => $userEntities[$userIndex]->getId(), 'type' => 'blog'));
                    $daySettings = array();
                    foreach ($daySettingEntities as $value) {
                        if ($value->getSelected()) {
                           $daySettings[] = $value->getDay();
                       }
                    }
                    if (5 == count($daySettings)) {
                        $userIndex++;
                        if ($userIndex >= count($userEntities)) {
                            $userIndex = 0;
                        }
                    }

                    $daysData[] = array(
                        'username' => $userEntities[$userIndex]->getName(),
                        'date'     => date('d', strtotime($currentDate)),
                        'login'    => $userEntities[$userIndex]->getId() == $loginUser ? 1 : 0,
                        'holiday'  => 0,
                        'user'     => $userEntities[$userIndex],
                        'userDate' => new \DateTime($currentDate. ' 00:00:00'),
                    );
                } else {
                    // 登録データがあるとき
                    foreach ($userEntities as $user) {
                        if ($user->getId() == $blogEntity[0]->getUser()->getId()){
                            break;
                        }
                    }
                    $daysData[] = array(
                        'username' => $user->getName(),
                        'date'     => date('d', strtotime($currentDate)),
                        'login'    => $user->getId() == $loginUser ? 1 : 0,
                        'holiday'  => 0,
                        'user'     => null,
                        'userDate' => null,
                    );
                }
            }

            // １週間を超えるとき
            if(count($daysData) >= 7) {
                $blogSchedules[] = $daysData;
                $daysData = array();
            }
            $userIndex++;
            if ($userIndex >= count($userEntities)) {
                $userIndex = 0;
            }
            $currentDate = date('Y-m-d', strtotime($currentDate. ' +1 day'));
            $currentDay = $this->php2kakarotWeeks[date("w", strtotime($currentDate))];
        }

        if (0 != count($daysData)) {
            $blogSchedules[] = $daysData;
        }

        // 新規登録データの知っ得できない日を入れ替え
        $blogSchedules = $this->replaceBlogSchedule($blogSchedules);

        // 新規登録
        $this->registerBlogSchedules($blogSchedules);


        return $blogSchedules;
    }

    /**
     * 最後の登録情報から次の順番のユーザー順を取得する。
     * @param userEntities
     * @return userIndex
     */
    private function getUserIndex($userEntities)
    {
        // 最後の登録情報を取得する
        $lastIds = $this->em->createQuery('SELECT b.id, IDENTITY(b.user) FROM QuartetKakarotBundle:BlogSchedule b WHERE b.user is not NULL ORDER BY b.id DESC')
                        ->setMaxResults(1);
        try {
            $index = 0;
            $userIndex = 0;
            foreach ($lastIds->getSingleResult() as $value) {
                if (0 == $index) {
                    $lastId = $value;
                } elseif (1 == $index) {
                    foreach ($userEntities as $user) {
                        if ($user->getId() == $value) {
                            $userIndex++;
                            break;
                        }
                        $userIndex++;
                    }
                }
                $index++;
            }
        } catch (NoResultException $e) {
            $userIndex = 0;
        }
        if ($userIndex >= count($userEntities)) {
            $userIndex = 0;
        }

        return $userIndex;
    }

    /**
     * 新規登録データの知っ得できない日を入れ替えする。
     * @param array blogSchedules
     * @return array blogSchedules
     */
    private function replaceBlogSchedule(array $blogSchedules)
    {
        $indexBlogSchedules = 0;
        foreach ($blogSchedules as $daysData) {
            $indexdaysData = 0;
            foreach ($daysData as $entity) {
                if ($entity['user']) {
                    $daySettings = array();
                    $daySettingEntities = $this->em->getRepository('QuartetKakarotBundle:DaySetting')->findBy(array('user' => $entity['user']->getId(), 'type' => 'blog'));
                    foreach ($daySettingEntities as $value) {
                        if ($value->getSelected()) {
                           $daySettings[] = $value->getDay()->getId();
                       }
                    }
                    if (in_array($indexdaysData+1,$daySettings)) {
                        while (true) {
                            $indexWeek = rand(1,count($blogSchedules));
                            $indexDay = rand(1,5);
                            if (in_array($indexDay,$daySettings)) {
                                continue;
                            } elseif (null == $blogSchedules[$indexWeek-1][$indexDay-1]['user']) {
                                continue;
                            }
                            $tmpDaySettings = array();
                            $daySettingEntities = $this->em->getRepository('QuartetKakarotBundle:DaySetting')
                                ->findBy(array('user' => $blogSchedules[$indexWeek-1][$indexDay-1]['user']->getId(), 'type' => 'blog'));
                            foreach ($daySettingEntities as $value) {
                                if ($value->getSelected()) {
                                   $tmpDaySettings[] = $value->getDay();
                               }
                            }

                            if (in_array($indexDay,$tmpDaySettings)) {
                                continue;
                            }

                            $tmpUsername = $blogSchedules[$indexBlogSchedules][$indexdaysData]['username'];
                            $tmpLogin    = $blogSchedules[$indexBlogSchedules][$indexdaysData]['login'];
                            $tmpUser     = $blogSchedules[$indexBlogSchedules][$indexdaysData]['user'];

                            $blogSchedules[$indexBlogSchedules][$indexdaysData]['username'] = $blogSchedules[$indexWeek-1][$indexDay-1]['username'];
                            $blogSchedules[$indexBlogSchedules][$indexdaysData]['login']    = $blogSchedules[$indexWeek-1][$indexDay-1]['login'];
                            $blogSchedules[$indexBlogSchedules][$indexdaysData]['user']     = $blogSchedules[$indexWeek-1][$indexDay-1]['user'];

                            $blogSchedules[$indexWeek-1][$indexDay-1]['username'] = $tmpUsername;
                            $blogSchedules[$indexWeek-1][$indexDay-1]['login']    = $tmpLogin;
                            $blogSchedules[$indexWeek-1][$indexDay-1]['user']     = $tmpUser;
                            break;
                        }
                    }

                }
                $indexdaysData++;
            }
            $indexBlogSchedules++;
        }

        return $blogSchedules;
    }

    /**
     * 新規登録を行う。
     * @param array blogSchedules
     */
    private function registerBlogSchedules($blogSchedules)
    {
        foreach ($blogSchedules as $daysData) {
            foreach ($daysData as $entity) {
                if($entity['user']) {
                    $blogEntity = new BlogSchedule();
                    $blogEntity->setDate($entity['userDate']);
                    $blogEntity->setUser($entity['user']);
                    $this->em->persist($blogEntity);
                    $this->em->flush();
                }
            }
        }
    }
}
