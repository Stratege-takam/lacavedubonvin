<?php

namespace Web\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="history")
 * @ORM\Entity(repositoryClass="Web\EntityBundle\Repository\HistoryRepository")
 */
class History
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
     * @var Drink
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Drink",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    protected $drink;

    /**
     * @var Enterprise
     * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\Enterprise",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    protected $enterprise;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="date")
     */
    private $createDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="isAvailable", type="boolean")
     */
    private $isAvailable;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;


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
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return History
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set isAvailable
     *
     * @param boolean $isAvailable
     *
     * @return History
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return bool
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return History
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set drink
     *
     * @param \EntityBundle\Entity\Drink $drink
     *
     * @return History
     */
    public function setDrink(\EntityBundle\Entity\Drink $drink)
    {
        $this->drink = $drink;

        return $this;
    }

    /**
     * Get drink
     *
     * @return \EntityBundle\Entity\Drink
     */
    public function getDrink()
    {
        return $this->drink;
    }

    /**
     * Set enterprise
     *
     * @param \EntityBundle\Entity\Enterprise $enterprise
     *
     * @return History
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
