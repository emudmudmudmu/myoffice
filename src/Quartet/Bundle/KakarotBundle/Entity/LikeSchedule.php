<?php

namespace Quartet\Bundle\KakarotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LikeSchedule
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quartet\Bundle\KakarotBundle\Entity\LikeScheduleRepository")
 */
class LikeSchedule
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="likeSchedules")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Day", inversedBy="likeSchedules")
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="groupName", type="string", length=255)
     */
    private $groupName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dueDate", type="date")
     */
    private $dueDate;


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
     * Set groupName
     *
     * @param string $groupName
     * @return LikeSchedule
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return LikeSchedule
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set user
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\User $user
     * @return LikeSchedule
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
     * Set day
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Day $day
     * @return LikeSchedule
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