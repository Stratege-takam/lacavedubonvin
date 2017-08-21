<?php

namespace Web\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="Web\EntityBundle\Repository\PhotoRepository")
 */
class Photo
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
     * @ORM\ManyToOne(targetEntity="Photo", inversedBy="photos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $drink;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="hashname", type="text")
     */
    private $hashname;

    /**
     * @var string
     *
     * @ORM\Column(name="ext", type="string", length=255)
     */
    private $ext;

    /**
     * @var float
     *
     * @ORM\Column(name="size", type="float")
     */
    private $size;


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
     * @return Photo
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
     * Set hashname
     *
     * @param string $hashname
     *
     * @return Photo
     */
    public function setHashname($hashname)
    {
        $this->hashname = $hashname;

        return $this;
    }

    /**
     * Get hashname
     *
     * @return string
     */
    public function getHashname()
    {
        return $this->hashname;
    }

    /**
     * Set ext
     *
     * @param string $ext
     *
     * @return Photo
     */
    public function setExt($ext)
    {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get ext
     *
     * @return string
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * Set size
     *
     * @param float $size
     *
     * @return Photo
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
     * Set drink
     *
     * @param \Web\EntityBundle\Entity\Photo $drink
     *
     * @return Photo
     */
    public function setDrink(\Web\EntityBundle\Entity\Photo $drink)
    {
        $this->drink = $drink;

        return $this;
    }

    /**
     * Get drink
     *
     * @return \Web\EntityBundle\Entity\Photo
     */
    public function getDrink()
    {
        return $this->drink;
    }
}
