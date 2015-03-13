<?php

namespace Quartet\Bundle\KakarotBundle\Service;

use Doctrine\ORM\EntityManager;

use Quartet\Bundle\KakarotBundle\Entity\Day;
use Quartet\Bundle\KakarotBundle\Entity\GlobalSetting;
use Quartet\Bundle\KakarotBundle\Entity\Role;

class MasterDataResgister
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

    public function initialize()
    {
        $this->initializeLikeUpdateFrequency();
        $this->initializeRole();
        $this->initializeDay();
    }

    public function initializeLikeUpdateFrequency()
    {
        $entities = $this->em->getRepository('QuartetKakarotBundle:GlobalSetting')->findAll();

        if (false == $entities) {
            $globalSetting = new GlobalSetting();
            $globalSetting->setLikeUpdateFrequency(1);
            $this->em->persist($globalSetting);
            $this->em->flush();
        }
    }

    public function initializeRole()
    {
        $entities = $this->em->getRepository('QuartetKakarotBundle:Role')->findAll();

        if (false == $entities) {
            $roles = array('ユーザー', '管理者', 'ゲスト');
            foreach ($roles as $value) {
                $role = new Role();
                $role->setName($value);
                $this->em->persist($role);
            }
            $this->em->flush();
        }
    }

    public function initializeDay()
    {
        $entities = $this->em->getRepository('QuartetKakarotBundle:Day')->findAll();

        if (false == $entities) {
            $days = array('月', '火', '水', '木', '金', '土', '日');
            for ($i = 0; $i < count($days); $i++) {
                $day = new Day();
                $day->setName($days[$i]);
                $this->em->persist($day);
            }
            $this->em->flush();
        }
    }
}

