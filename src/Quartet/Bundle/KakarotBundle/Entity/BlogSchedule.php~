<?php

namespace Quartet\Bundle\KakarotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogSchedule
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quartet\Bundle\KakarotBundle\Entity\BlogScheduleRepository")
 */
class BlogSchedule
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="blogSchedules");
     */
    private $user;


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
     * Set date
     *
     * @param \DateTime $date
     * @return BlogSchedule
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Set user
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\User $user
     * @return BlogSchedule
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
}