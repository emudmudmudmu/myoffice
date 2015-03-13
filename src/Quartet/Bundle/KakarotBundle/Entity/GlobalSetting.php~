<?php

namespace Quartet\Bundle\KakarotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlobalSetting
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quartet\Bundle\KakarotBundle\Entity\GlobalSettingRepository")
 */
class GlobalSetting
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="likeUpdateFrequency", type="integer")
     */
    private $likeUpdateFrequency;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set likeUpdateFrequency
     *
     * @param integer $likeUpdateFrequency
     * @return GlobalSetting
     */
    public function setLikeUpdateFrequency($likeUpdateFrequency)
    {
        $this->likeUpdateFrequency = $likeUpdateFrequency;
    
        return $this;
    }

    /**
     * Get likeUpdateFrequency
     *
     * @return integer 
     */
    public function getLikeUpdateFrequency()
    {
        return $this->likeUpdateFrequency;
    }
}