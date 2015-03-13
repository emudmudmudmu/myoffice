<?php

namespace Quartet\Bundle\KakarotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Day
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quartet\Bundle\KakarotBundle\Entity\DayRepository")
 */
class Day
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="LikeSchedule", mappedBy="day")
     */
    private $likeSchedules;

    /**
     * @ORM\OneToMany(targetEntity="DaySetting", mappedBy="day")
     */
    private $daySettings;

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
     * Set name
     *
     * @param string $name
     * @return Day
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->likeSchedules = new \Doctrine\Common\Collections\ArrayCollection();
        $this->daySettings = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add likeSchedules
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\LikeSchedule $likeSchedules
     * @return Day
     */
    public function addLikeSchedule(\Quartet\Bundle\KakarotBundle\Entity\LikeSchedule $likeSchedules)
    {
        $this->likeSchedules[] = $likeSchedules;

        return $this;
    }

    /**
     * Remove likeSchedules
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\LikeSchedule $likeSchedules
     */
    public function removeLikeSchedule(\Quartet\Bundle\KakarotBundle\Entity\LikeSchedule $likeSchedules)
    {
        $this->likeSchedules->removeElement($likeSchedules);
    }

    /**
     * Get likeSchedules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLikeSchedules()
    {
        return $this->likeSchedules;
    }

    /**
     * Add daySettings
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\DaySetting $daySettings
     * @return Day
     */
    public function addDaySetting(\Quartet\Bundle\KakarotBundle\Entity\DaySetting $daySettings)
    {
        $this->daySettings[] = $daySettings;

        return $this;
    }

    /**
     * Remove daySettings
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\DaySetting $daySettings
     */
    public function removeDaySetting(\Quartet\Bundle\KakarotBundle\Entity\DaySetting $daySettings)
    {
        $this->daySettings->removeElement($daySettings);
    }

    /**
     * Get daySettings
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDaySettings()
    {
        return $this->daySettings;
    }
}