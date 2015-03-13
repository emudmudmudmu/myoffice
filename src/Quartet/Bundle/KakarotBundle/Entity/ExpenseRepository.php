<?php

namespace Quartet\Bundle\KakarotBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Quartet\Bundle\KakarotBundle\Entity\AccoutTitle;
use Quartet\Bundle\KakarotBundle\Entity\Expense;
use Quartet\Bundle\KakarotBundle\Entity\User;

/**
 * ExpenseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ExpenseRepository extends EntityRepository
{
    private $message;


    /**
     * 指定の月の登録情報を取得する。
     * @param $date
     * @return $entities
     */
    public function getEntities($date, User $user)
    {
        $firstDay = $date. '-01';
        $lastDay = date('Y-m-d', strtotime($date. ' last day +1 month'));

        $entities = $this->createQueryBuilder('e')
            ->where('e.date >= :firstDay')
            ->setParameter('firstDay', $firstDay)
            ->andwhere('e.date <= :lastDay')
            ->setParameter('lastDay', $lastDay)
            ->andwhere('e.user = :user')
            ->setParameter('user', $user->getId())
            ->orderby('e.date', 'ASC')
            ->getQuery()
            ->getResult();

        return $entities;
    }

    /**
     * 指定のIDの経費内容をコピーする
     * @param $id
     */
    public function copyEntity($id)
    {
        $em = $this->getEntityManager();
        $entity = $em->getRepository('QuartetKakarotBundle:Expense')->find($id);

        $copyEntity = new Expense();
        $copyEntity->setDate($entity->getDate());
        $copyEntity->setAccountTitle($entity->getAccountTitle());
        $copyEntity->setPayee($entity->getPayee());
        $copyEntity->setAmount($entity->getAmount());
        $copyEntity->setNote($entity->getNote());
        $copyEntity->setUser($entity->getUser());

        $em->persist($copyEntity);
        $em->flush();
    }

    /**
     * 指定の状態の登録情報を取得する。
     * @param $user
     * @param $accountTitle
     * @return $entities
     */
    public function getSelectEntities($user, $accountTitle)
    {
        $query = $this->createQueryBuilder('e')
            ->where('e.status != :status')
            ->setParameter('status', 'closed')
            ->orderby('e.date', 'ASC');

        if ('' != $user) {
            $query->andwhere('e.user = :user')
                ->setParameter('user', $user);
        }

        if ('' != $accountTitle) {
            $query->andwhere('e.accountTitle = :accountTitle')
                ->setParameter('accountTitle', $accountTitle);
        }

        $entities = $query->getQuery()->getResult();

        return $entities;
    }

    /**
     * 指定の登録情報の状態を変更する。
     * @param $status
     * @param $user
     * @param $accountTitle
     * @return $entities
     */
    public function setStatus($status, $user, $accountTitle)
    {
        $checkFlag = false;
        $this->message = null;

        $entities = $this->getSelectEntities($user, $accountTitle);

        foreach ($entities as $value) {
            if ('open' == $status ||
                ('open' == $value->getStatus() && 'processing' == $status) ||
                ('processing' == $value->getStatus() && 'closed' == $status )) {
                $value->setStatus($status);
                $query = $this->createQueryBuilder('e')
                    ->update('QuartetKakarotBundle:Expense', 'e')
                    ->set('e.status', ':status')
                    ->setParameter('status', $status)
                    ->where('e.id = :id')
                    ->setParameter('id', $value->getId())
                    ->getQuery()
                    ->execute();
                $checkFlag = true;

                $em = $this->getEntityManager();
                if ('processing' == $status) {
                    $em->getRepository('QuartetKakarotBundle:Notification')
                        ->sendExpenseProcessing($value);
                } elseif ('closed' == $status) {
                    $em->getRepository('QuartetKakarotBundle:Notification')
                        ->sendExpenseClosed($value);
                }
            }
        }

        if (!$checkFlag) {
            $this->message = '状態変更できた精算項目がありません。';
        }

        $entities = $this->getSelectEntities($user, $accountTitle);

        return $entities;
    }

    /**
     * メッセージを取得する
     * @return $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * 精算額の表示内容を取得する。
     * @param $entities
     * @return $message
     */
    public function getSumMessage($entities)
    {
        $statusOpenCount = 0;
        $statusProcessingCount = 0;

        $statusOpenSum = 0;
        $statusProcessingSum = 0;

        foreach ($entities as $value) {
            if ('open' == $value->getStatus()) {
                $statusOpenCount = $statusOpenCount + 1;
                $statusOpenSum = $statusOpenSum + $value->getAmount();
            } elseif ('processing' == $value->getStatus()) {
                $statusProcessingCount = $statusProcessingCount + 1;
                $statusProcessingSum = $statusProcessingSum + $value->getAmount();
            }
        }

        $message = '未精算：'. $statusOpenCount. '件 金額：'. $statusOpenSum.
            '円　　精算中：'. $statusProcessingCount. '件 金額：'.  $statusProcessingSum. '円';

        return $message;
    }
}