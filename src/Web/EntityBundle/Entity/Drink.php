<?php

namespace Web\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Drink
 *
 * @ORM\Table(name="drink")
 * @ORM\Entity(repositoryClass="Web\EntityBundle\Repository\DrinkRepository")
 */
class Drink
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var float
     *
     * @ORM\Column(name="size", type="float")
     */
    private $size;

    /**
     * @var int
     *
     * @ORM\Column(name="compter", type="integer")
     */
    private $compter;


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
     * Set name
     *
     * @param string $name
     *
     * @return Drink
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
     * Set color
     *
     * @param string $color
     *
     * @return Drink
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set size
     *
     * @param float $size
     *
     * @return Drink
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set compter
     *
     * @param integer $compter
     *
     * @return Drink
     */
    public function setCompter($compter)
    {
        $this->compter = $compter;

        return $this;
    }

    /**
     * Get compter
     *
     * @return int
     */
    public function getCompter()
    {
        return $this->compter;
    }
}
