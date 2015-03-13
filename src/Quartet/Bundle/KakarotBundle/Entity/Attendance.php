<?php

namespace Quartet\Bundle\KakarotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Attendance
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quartet\Bundle\KakarotBundle\Entity\AttendanceRepository")
 * @Gedmo\SoftDeleteable(fieldName="deleted", timeAware=false)
 * @ORM\HasLifecycleCallbacks
  */
class Attendance
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
     * @ORM\JoinColumn(nullable=false)
     * @ORM\ManyToOne(targetEntity="User", inversedBy="attendances")
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="attended", type="time", nullable=true)
     */
    private $attended;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="returned", type="time", nullable=true)
     */
    private $returned;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="break1_started", type="time", nullable=true)
     */
    private $break1Started;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="break1_ended", type="time", nullable=true)
     */
    private $break1Ended;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="break2_started", type="time", nullable=true)
     */
    private $break2Started;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="break2_ended", type="time", nullable=true)
     */
    private $break2Ended;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deteted", type="datetime", nullable=true)
     */
    private $deleted;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->created = new \DateTime();
    }

    /**
     * @ORM\PreUpdate()
     */
    public function setUpdateDate()
    {
        $this->updated = new \DateTime();
    }

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
     * @return Attendance
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
     * Set attended
     *
     * @param \DateTime $attended
     * @return Attendance
     */
    public function setAttended($attended)
    {
        $this->attended = $attended;

        return $this;
    }

    /**
     * Get attended
     *
     * @return \DateTime
     */
    public function getAttended()
    {
        return $this->attended;
    }

    /**
     * Set returned
     *
     * @param \DateTime $returned
     * @return Attendance
     */
    public function setReturned($returned)
    {
        $this->returned = $returned;

        return $this;
    }

    /**
     * Get returned
     *
     * @return \DateTime
     */
    public function getReturned()
    {
        return $this->returned;
    }

    /**
     * Set break1Started
     *
     * @param \DateTime $break1Started
     * @return Attendance
     */
    public function setBreak1Started($break1Started)
    {
        $this->break1Started = $break1Started;

        return $this;
    }

    /**
     * Get break1Started
     *
     * @return \DateTime
     */
    public function getBreak1Started()
    {
        return $this->break1Started;
    }

    /**
     * Set break1Ended
     *
     * @param \DateTime $break1Ended
     * @return Attendance
     */
    public function setBreak1Ended($break1Ended)
    {
        $this->break1Ended = $break1Ended;

        return $this;
    }

    /**
     * Get break1Ended
     *
     * @return \DateTime
     */
    public function getBreak1Ended()
    {
        return $this->break1Ended;
    }

    /**
     * Set break2Started
     *
     * @param \DateTime $break2Started
     * @return Attendance
     */
    public function setBreak2Started($break2Started)
    {
        $this->break2Started = $break2Started;

        return $this;
    }

    /**
     * Get break2Started
     *
     * @return \DateTime
     */
    public function getBreak2Started()
    {
        return $this->break2Started;
    }

    /**
     * Set break2Ended
     *
     * @param \DateTime $break2Ended
     * @return Attendance
     */
    public function setBreak2Ended($break2Ended)
    {
        $this->break2Ended = $break2Ended;

        return $this;
    }

    /**
     * Get break2Ended
     *
     * @return \DateTime
     */
    public function getBreak2Ended()
    {
        return $this->break2Ended;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Attendance
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Attendance
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Attendance
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set deleted
     *
     * @param \DateTime $deleted
     * @return Position
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return \DateTime
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set user
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\User $user
     * @return Attendance
     */
    public function setUser(\Quartet\Bundle\KakarotBundle\Entity\User $user)
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