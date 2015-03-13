<?php

namespace Quartet\Bundle\KakarotBundle\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\NoResultException;

use Quartet\Bundle\KakarotBundle\Entity\LikeSchedule;


/**
 * いいね！グループ取得
 */
class LikeSchedulesService
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
     * いいね！グループを取得する。
     * @param array $oneWeekHoledays
     * @param $loginUser
     * @return array $likeSchedules
     */
    public function getLikeSchedules(array $oneWeekHoledays, $loginUser)
    {
        if (0 === count($oneWeekHoledays)) {
            throw new \LogicException("oneWeekHoledaysの値がありません。");
        }

        if (null === $loginUser) {
            throw new \LogicException("loginUserの値がありません。");
        }

        // 更新日の確認
        $currentDate = date('Y-m-d');
        $globalEntity = $this->em->getRepository('QuartetKakarotBundle:GlobalSetting')->findAll();

        // 期限の最後の日付を取得する
        $lastDueDates = $this->em->createQuery('SELECT l.dueDate FROM QuartetKakarotBundle:likeSchedule l ORDER BY l.dueDate DESC')
                        ->setMaxResults(1);
        try {
            foreach ($lastDueDates->getSingleResult() as $value) {
                $lastDueDate = $value->format('Y-m-d');
                $dueDate = $value;
                break;
            }
        } catch (NoResultException $e) {
            $lastDueDate = date('Y-m-d');
            $dueDate = null;
        }

        // 更新日の確認
        $lastDate = date('Y-m-d', strtotime($lastDueDate .' first day of '. $globalEntity[0]->getLikeUpdateFrequency() .' month'));

        $userEntities = $this->em->getRepository('QuartetKakarotBundle:User')->findAll();
        $likeEntities = $this->em->getRepository('QuartetKakarotBundle:likeSchedule')->findBy(array('dueDate' => $dueDate));

        // 新規作成または、更新日の場合
        if (!$likeEntities || ($lastDate <= $currentDate)) {
            $likeSchedules = $this->registerLikeSchedules($userEntities, $loginUser);
        // 登録データがあるとき
        } else {
            $likeSchedules = $this->findLikeSchedules($likeEntities, $userEntities, $loginUser);
        }

        return $likeSchedules;
    }


    /**
     * いいね！グループ 新規作成
     * @param $userEntities
     * @param $loginUser
     * @return array $likeSchedules
     */
    private function registerLikeSchedules($userEntities, $loginUser)
    {
        $globalEntity = $this->em->getRepository('QuartetKakarotBundle:GlobalSetting')->findAll();

        $likeSchedules = array();

        shuffle($userEntities);

        $indexGroupName = 1;
        $index = 2;
        $group = array();
        // 月曜日のデータ
        $group[] = array(
            'userId'     => '0',
            'username'   => '-',
            'day'        => 1,
            'user'       => null,
            'daySetting' => array('1'),
            'login'      => '0',
        );

        // ユーザー情報からいいね！グループを作成
        foreach ($userEntities as $user) {
            $daySettingEntities = $this->em->getRepository('QuartetKakarotBundle:DaySetting')->findBy(array('user' => $user->getId(), 'type' => 'like'));
            $daySetting = array();

            $count = 0;
            foreach ($daySettingEntities as $ds) {
                if (true == $ds->getSelected() && 1 != $ds->getDay()->getId()) {
                    $daySetting[] = $ds->getDay()->getId();
                    $count++;
                }
             }

            // 月曜以外が設定不可日の場合は除外
            if (4 <= $count) {
                continue;
            }

            $group[] = array(
                'userId'     => $user->getId(),
                'username'   => $user->getName(),
                'day'        => $index,
                'user'       => $user,
                'daySetting' => $daySetting,
                'login'      => $user->getId() == $loginUser ? 1 : 0,
            );
            // 金曜日の場合
            if (5 == $index) {
                $index = 2;
                $likeSchedules[] = array(
                    'group'     => $group,
                    'groupname' => $indexGroupName,
                );
                $indexGroupName++;
                $group = array();
                // 月曜日のデータ
                $group[] = array(
                    'userId'     => '0',
                    'username'   => '-',
                    'day'        => 1,
                    'user'       => null,
                    'daySetting' => array('1'),
                    'login'      => '0',
                );
            } else {
                $index++;
            }
        }

        // ４人に満たないグループは別のグループに振り分ける
        if (5 > count($group)) {
            foreach ($group as $user) {
                $indexGroups = rand(1,count($likeSchedules)) - 1;
                $indexGroup = rand(2,5) - 1;
                // 月曜日は無視する
                if (0 == $user['userId']) {
                    continue;
                }

                $likeSchedules[$indexGroups]['group'][$indexGroup]['userId']   = $likeSchedules[$indexGroups]['group'][$indexGroup]['userId'].','.$user['userId'];
                $likeSchedules[$indexGroups]['group'][$indexGroup]['username'] = $likeSchedules[$indexGroups]['group'][$indexGroup]['username'].','.$user['username'];
                $likeSchedules[$indexGroups]['group'][$indexGroup]['login']    = $likeSchedules[$indexGroups]['group'][$indexGroup]['login'] == 1 || $user['login'] == 1 ? 1 : 0;
                foreach ($user['daySetting'] as $ds) {
                    $likeSchedules[$indexGroups]['group'][$indexGroup]['daySetting'][] = $ds;
                }
            }
        } else {
            $likeSchedules[] = array(
                'group'     => $group,
                'groupname' => $indexGroupName,
            );
        }

        // いいね！できない日を確認
        $indexGroups = 0;
        foreach ($likeSchedules as $groups) {
            $indexGroup = 0;
            foreach ($groups['group'] as $user) {
                if ($user['user']) {
                    // できない日に割り当てられたとき
                    if (in_array($user['day'],$user['daySetting'])) {
                        while (true) {
                            $indexUser = rand(2,5);
                            if (!in_array($indexUser,$user['daySetting'])) {
                                if (in_array($indexUser,$likeSchedules[$indexGroups]['group'][$indexGroup]['daySetting'])) {
                                    continue;
                                }
                                break;
                            }
                        }
                        $tmp = $likeSchedules[$indexGroups]['group'][$indexUser-1];
                        $likeSchedules[$indexGroups]['group'][$indexUser-1] = $likeSchedules[$indexGroups]['group'][$indexGroup];
                        $likeSchedules[$indexGroups]['group'][$indexGroup] = $tmp;

                        $tmp = $likeSchedules[$indexGroups]['group'][$indexUser-1]['day'];
                        $likeSchedules[$indexGroups]['group'][$indexUser-1]['day'] = $likeSchedules[$indexGroups]['group'][$indexGroup]['day'];
                        $likeSchedules[$indexGroups]['group'][$indexGroup]['day'] = $tmp;

                        break;
                    }
                }
                $indexGroup++;
            }
            $indexGroups++;
        }

        // 期限を作成
        $lastDate = date('Y-m-d', strtotime('last day of '. $globalEntity[0]->getLikeUpdateFrequency() .' month'));
        $lastDate = date('Y-m-d', strtotime($lastDate. ' last day of last month'));

        // 新規データ登録
        foreach ($likeSchedules as $groups) {
            foreach ($groups['group'] as $users) {
                $ids = explode(',', $users['userId']);
                $dayEntities = $this->em->getRepository('QuartetKakarotBundle:Day')->findBy(array('id' => $users['day']));
                foreach ($ids as $user) {
                    $likeSchedule = new LikeSchedule();
                    foreach ($userEntities as $value) {
                        if ($user == $value->getId()) {
                            $likeSchedule->setUser($value);
                            break;
                        }
                    }
                    $likeSchedule->setDay($dayEntities[0]);
                    $likeSchedule->setGroupName($groups['groupname']);
                    $likeSchedule->setDueDate(new \DateTime($lastDate. ' 00:00:00'));
                    $this->em->persist($likeSchedule);
                }
            }
            $this->em->flush();
        }

        return $likeSchedules;
    }


    /**
     * いいね！グループ 登録情報の取得
     * @param $likeEntities
     * @param $loginUser
     * @return array $likeSchedules
     */
    private function findLikeSchedules($likeEntities, $userEntities, $loginUser)
    {
        $likeSchedules = array();
        $group = null;
        $groupIndex = 0;
        foreach ($likeEntities as $likeEntity) {
            $username = null;
            if ($groupIndex !== $likeEntity->getGroupName()) {
                if ( $group !== null) {
                    $likeSchedules[] = array(
                        'group'     => $group,
                        'groupname' => $groupIndex,
                    );
                }
                $group = array();
                $groupIndex = $likeEntity->getGroupName();
            }
            // ユーザー名を取得
            foreach ($userEntities as $user) {
                if ($likeEntity->getUser()) {
                    if ($user->getId() == $likeEntity->getUser()->getId()) {
                        $username = $user->getName();
                        break;
                    }
                } else {
                    $username = '-';
                }
            }

            // 複数名のとき
            if (count($group) >= $likeEntity->getDay()->getId()) {
                $group[$likeEntity->getDay()->getId()-1]['userId']   = $group[$likeEntity->getDay()->getId()-1]['userId'].','.$likeEntity->getId();
                $group[$likeEntity->getDay()->getId()-1]['username'] = $group[$likeEntity->getDay()->getId()-1]['username'].','.$username;
                if (0 === $group[$likeEntity->getDay()->getId()-1]['login']) {
                    $group[$likeEntity->getDay()->getId()-1]['login'] = $likeEntity->getUser()->getId() == $loginUser ? 1 : 0;
                }
            // １人のとき
            } else {
                if ($likeEntity->getUser()) {
                    $group[] = array(
                        'userId'    => $likeEntity->getUser()->getId(),
                        'username'  => $username,
                        'login'     => $likeEntity->getUser()->getId() == $loginUser ? 1 : 0,
                    );
                // ユーザー情報がない（月曜日）とき
                } else {
                    $group[] = array(
                        'userId'    => 0,
                        'username'  => $username,
                        'login'     => 0,
                    );
                }
            }
        }
        $likeSchedules[] = array(
            'group'     => $group,
            'groupname' => $groupIndex,
        );

        return $likeSchedules;
    }
}
