<?php

namespace Quartet\Bundle\KakarotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * Expense
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Quartet\Bundle\KakarotBundle\Entity\ExpenseRepository")
 * @Gedmo\SoftDeleteable(fieldName="deleted", timeAware=false)
 * @ORM\HasLifecycleCallbacks
 */
class Expense
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="expenses")
     */
    private $user;

    /**
     * @ORM\JoinColumn(nullable=false)
     * @ORM\ManyToOne(targetEntity="AccountTitle", inversedBy="expenses")
     */
    private $accountTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="payee", type="text", nullable=false)
     */
    private $payee;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="clearing_date", type="date", nullable=true)
     */
    private $clearingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", columnDefinition="enum('open','processing','closed')", nullable=false)
     */
    private $status;

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
        $this->date = new \DateTime();
        $this->status = 'open';
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
     * @return Expense
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
     * Set payee
     *
     * @param string $payee
     * @return Expense
     */
    public function setPayee($payee)
    {
        $this->payee = $payee;

        return $this;
    }

    /**
     * Get payee
     *
     * @return string
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     * @return Expense
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Expense
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
     * Set clearingDate
     *
     * @param \DateTime $clearingDate
     * @return Expense
     */
    public function setClearingDate($clearingDate)
    {
        $this->clearingDate = $clearingDate;

        return $this;
    }

    /**
     * Get clearingDate
     *
     * @return \DateTime
     */
    public function getClearingDate()
    {
        return $this->clearingDate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Expense
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Expense
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
     * @return Expense
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
     * @return Expense
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
     * @return Expense
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

    /**
     * Set accountTitle
     *
     * @param \Quartet\Bundle\KakarotBundle\Entity\AccountTitle $accountTitle
     * @return Expense
     */
    public function setAccountTitle(\Quartet\Bundle\KakarotBundle\Entity\AccountTitle $accountTitle)
    {
        $this->accountTitle = $accountTitle;

        return $this;
    }

    /**
     * Get accountTitle
     *
     * @return \Quartet\Bundle\KakarotBundle\Entity\AccountTitle
     */
    public function getAccountTitle()
    {
        return $this->accountTitle;
    }
}