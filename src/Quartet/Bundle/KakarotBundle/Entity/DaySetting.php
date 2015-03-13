<?php

namespace Quartet\Bundle\KakarotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DaySetting
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quartet\Bundle\KakarotBundle\Entity\DaySettingRepository")
 */
class DaySetting
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="daySettings")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", columnDefinition="enum('clean','blog','like')")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Day", inversedBy="daySettings")
     */
    private $day;

    /**
     * @var boolean
     *
     * @ORM\Column(name="selected", type="boolean")
     */
    private $selected;

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
     * Set type
     *
     * @param string $type
     * @return DaySetting
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set user
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\User $user
     * @return DaySetting
     */
    public function setUser(\Quartet\Bundle\KakarotBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Quartet\Bundle\KakarotBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set selected
     *
     * @param boolean $selected
     * @return DaySetting
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * Get selected
     *
     * @return boolean
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * Set day
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Day $day
     * @return DaySetting
     */
    public function setDay(\Quartet\Bundle\KakarotBundle\Entity\Day $day = null)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return \Quartet\Bundle\KakarotBundle\Entity\Day
     */
    public function getDay()
    {
        return $this->day;
    }
}