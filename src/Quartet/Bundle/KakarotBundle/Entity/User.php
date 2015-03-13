<?php

namespace Quartet\Bundle\KakarotBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quartet\Bundle\KakarotBundle\Entity\UserRepository")
 * @Gedmo\SoftDeleteable(fieldName="deleted", timeAware=false)
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\JoinColumn(nullable=false)
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="users")
     */
    private $role;

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
     * @ORM\Column(name="deleted", type="datetime", nullable=true)
     */
    private $deleted;

    /**
     * @ORM\OneToMany(targetEntity="DaySetting", mappedBy="user", cascade={"persist"})
     */
    private $daySettings;

    /**
     * ゴミ捨て当番
     * @var array
     * @ORM\OneToMany(targetEntity="CleanSchedule", mappedBy="user")
     */
    private $cleanSchedules;

    /**
     * いいね褒められ当番
     * @var array
     * @ORM\OneToMany(targetEntity="LikeSchedule", mappedBy="user")
     */
    private $likeSchedules;

    /**
     * 知っ得当番
     * @var array
     * @ORM\OneToMany(targetEntity="BlogSchedule", mappedBy="user")
    */
    private $blogSchedules;


    /**
     * @ORM\JoinColumn(nullable=false)
     * @ORM\ManyToOne(targetEntity="Division", inversedBy="users")
     */
    private $division;

    /**
     * @ORM\JoinColumn(nullable=false)
     * @ORM\ManyToOne(targetEntity="Position", inversedBy="users")
     */
    private $position;

    /**
     * @ORM\JoinColumn(nullable=true)
     * @ORM\ManyToOne(targetEntity="User", inversedBy="subordinates")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Notification", mappedBy="user")
     */
    private $notifications;

    /**
     * @ORM\OneToMany(targetEntity="Attendance", mappedBy="user")
     */
    private $attendances;

    /**
     * @ORM\OneToMany(targetEntity="Expense", mappedBy="user")
     */
    private $expenses;

    /**
     * @ORM\OneToMany(targetEntity="PaidHoliday", mappedBy="author")
     */
    private $authors;

    /**
     * @ORM\OneToMany(targetEntity="PaidHoliday", mappedBy="approver")
     */
    private $approvers;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="parent")
     */
    private $subordinates;


    /**
     * Set id
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set role
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Role $role
     * @return User
     */
    public function setRole(\Quartet\Bundle\KakarotBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Quartet\Bundle\KakarotBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
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
     * @return User
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
     * @return User
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
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->daySettings = new \Doctrine\Common\Collections\ArrayCollection();
        $this->created = new \DateTime();

        $this->cleanSchedules = new \Doctrine\Common\Collections\ArrayCollection();
        $this->likeSchedules = new \Doctrine\Common\Collections\ArrayCollection();
        $this->blogSchedules = new \Doctrine\Common\Collections\ArrayCollection();

        $this->parent = null;
        $this->notifications = new \Doctrine\Common\Collections\ArrayCollection();
        $this->attendances = new \Doctrine\Common\Collections\ArrayCollection();
        $this->expenses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->approvers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdateDate()
    {
        $this->updated = new \DateTime();
    }

    /**
     * Add daySettings
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\DaySetting $daySettings
     * @return User
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

    public function deleteDaySettings()
    {
        $this->daySettings = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add cleanSchedules
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\CleanSchedule $cleanSchedules
     * @return User
     */
    public function addCleanSchedule(\Quartet\Bundle\KakarotBundle\Entity\CleanSchedule $cleanSchedules)
    {
        $this->cleanSchedules[] = $cleanSchedules;

        return $this;
    }

    /**
     * Remove cleanSchedules
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\CleanSchedule $cleanSchedules
     */
    public function removeCleanSchedule(\Quartet\Bundle\KakarotBundle\Entity\CleanSchedule $cleanSchedules)
    {
        $this->cleanSchedules->removeElement($cleanSchedules);
    }

    /**
     * Get cleanSchedules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCleanSchedules()
    {
        return $this->cleanSchedules;
    }

    /**
     * Add likeSchedules
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\LikeSchedule $likeSchedules
     * @return User
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
     * Add blogSchedules
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\BlogSchedule $blogSchedules
     * @return User
     */
    public function addBlogSchedule(\Quartet\Bundle\KakarotBundle\Entity\BlogSchedule $blogSchedules)
    {
        $this->blogSchedules[] = $blogSchedules;

        return $this;
    }

    /**
     * Remove blogSchedules
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\BlogSchedule $blogSchedules
     */
    public function removeBlogSchedule(\Quartet\Bundle\KakarotBundle\Entity\BlogSchedule $blogSchedules)
    {
        $this->blogSchedules->removeElement($blogSchedules);
    }

    /**
     * Get blogSchedules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBlogSchedules()
    {
        return $this->blogSchedules;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
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
     * Set division
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Division $division
     * @return User
     */
    public function setDivision(\Quartet\Bundle\KakarotBundle\Entity\Division $division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return \Quartet\Bundle\KakarotBundle\Entity\Division
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set position
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Position $position
     * @return User
     */
    public function setPosition(\Quartet\Bundle\KakarotBundle\Entity\Position $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return \Quartet\Bundle\KakarotBundle\Entity\Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Add notifications
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Notification $notifications
     * @return User
     */
    public function addNotification(\Quartet\Bundle\KakarotBundle\Entity\Notification $notifications)
    {
        $this->notifications[] = $notifications;

        return $this;
    }

    /**
     * Remove notifications
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Notification $notifications
     */
    public function removeNotification(\Quartet\Bundle\KakarotBundle\Entity\Notification $notifications)
    {
        $this->notifications->removeElement($notifications);
    }

    /**
     * Get notifications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * Add attendances
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Attendance $attendances
     * @return User
     */
    public function addAttendance(\Quartet\Bundle\KakarotBundle\Entity\Attendance $attendances)
    {
        $this->attendances[] = $attendances;

        return $this;
    }

    /**
     * Remove attendances
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Attendance $attendances
     */
    public function removeAttendance(\Quartet\Bundle\KakarotBundle\Entity\Attendance $attendances)
    {
        $this->attendances->removeElement($attendances);
    }

    /**
     * Get attendances
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAttendances()
    {
        return $this->attendances;
    }

    /**
     * Add expenses
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Expense $expenses
     * @return User
     */
    public function addExpense(\Quartet\Bundle\KakarotBundle\Entity\Expense $expenses)
    {
        $this->expenses[] = $expenses;

        return $this;
    }

    /**
     * Remove expenses
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\Expense $expenses
     */
    public function removeExpense(\Quartet\Bundle\KakarotBundle\Entity\Expense $expenses)
    {
        $this->expenses->removeElement($expenses);
    }

    /**
     * Get expenses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * Add authors
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\PaidHoliday $authors
     * @return User
     */
    public function addAuthor(\Quartet\Bundle\KakarotBundle\Entity\PaidHoliday $authors)
    {
        $this->authors[] = $authors;

        return $this;
    }

    /**
     * Remove authors
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\PaidHoliday $authors
     */
    public function removeAuthor(\Quartet\Bundle\KakarotBundle\Entity\PaidHoliday $authors)
    {
        $this->authors->removeElement($authors);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Add approvers
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\PaidHoliday $approvers
     * @return User
     */
    public function addApprover(\Quartet\Bundle\KakarotBundle\Entity\PaidHoliday $approvers)
    {
        $this->approvers[] = $approvers;

        return $this;
    }

    /**
     * Remove approvers
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\PaidHoliday $approvers
     */
    public function removeApprover(\Quartet\Bundle\KakarotBundle\Entity\PaidHoliday $approvers)
    {
        $this->approvers->removeElement($approvers);
    }

    /**
     * Get approvers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprovers()
    {
        return $this->approvers;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * Set parent
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\User $parent
     * @return User
     */
    public function setParent(\Quartet\Bundle\KakarotBundle\Entity\User $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Quartet\Bundle\KakarotBundle\Entity\User
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add subordinate
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\User $subordinates
     * @return User
     */
    public function addSubordinate(\Quartet\Bundle\KakarotBundle\Entity\User $subordinate)
    {
        $this->subordinates[] = $subordinate;

        return $this;
    }

    /**
     * Remove subordinate
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\User $subordinates
     */
    public function removeSubordinate(\Quartet\Bundle\KakarotBundle\Entity\User $subordinate)
    {
        $this->subordinates->removeElement($subordinate);
    }

    /**
     * Get subordinates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubordinates()
    {
        return $this->subordinates;
    }
}
