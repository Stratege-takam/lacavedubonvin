<?php

namespace Web\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Command
 *
 * @ORM\Table(name="command")
 * @ORM\Entity(repositoryClass="Web\EntityBundle\Repository\CommandRepository")
 */
class Command
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=255)
     */
    private $number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commandDate", type="datetime")
     */
    private $commandDate;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean")
     */
    private $state;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return Command
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set commandDate
     *
     * @param \DateTime $commandDate
     *
     * @return Command
     */
    public function setCommandDate($commandDate)
    {
        $this->commandDate = $commandDate;

        return $this;
    }

    /**
     * Get commandDate
     *
     * @return \DateTime
     */
    public function getCommandDate()
    {
        return $this->commandDate;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Command
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set state
     *
     * @param boolean $state
     *
     * @return Command
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return bool
     */
    public function getState()
    {
        return $this->state;
    }
}
