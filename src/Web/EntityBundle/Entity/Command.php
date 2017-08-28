<?php

namespace Web\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

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
     * @var Client
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Client",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    protected $client;

    /**
     * @var Enterprise
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Enterprise",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    protected $enterprise;


    /**
     * @var string
     * @Assert\NotBlank(message="command.number.NotBlank")
     * @ORM\Column(name="number", type="string", length=255)
     */
    private $number;

    /**
     * @var \DateTime
     * @Assert\NotBlank(message="command.commandDate.NotBlank")
     * @ORM\Column(name="commandDate", type="datetime")
     */
    private $commandDate;

    /**
     * @var float
     * @Assert\NotBlank(message="command.amount.NotBlank")
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * @var bool
     * @Assert\NotBlank(message="command.state.NotBlank")
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

    /**
     * Set client
     *
     * @param \EntityBundle\Entity\Client $client
     *
     * @return Command
     */
    public function setClient(\EntityBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \EntityBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set enterprise
     *
     * @param \EntityBundle\Entity\Enterprise $enterprise
     *
     * @return Command
     */
    public function setEnterprise(\EntityBundle\Entity\Enterprise $enterprise)
    {
        $this->enterprise = $enterprise;

        return $this;
    }

    /**
     * Get enterprise
     *
     * @return \EntityBundle\Entity\Enterprise
     */
    public function getEnterprise()
    {
        return $this->enterprise;
    }
}
