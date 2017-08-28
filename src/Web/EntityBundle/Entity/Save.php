<?php

namespace Web\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Save
 *
 * @ORM\Table(name="save")
 * @ORM\Entity(repositoryClass="Web\EntityBundle\Repository\SaveRepository")
 */
class Save
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
     * @var \DateTime
     * @Assert\NotBlank(message="save.createDate.NotBlank")
     * @ORM\Column(name="createDate", type="datetime")
     */
    private $createDate;


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
     * @return Save
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
     * Set client
     *
     * @param \EntityBundle\Entity\Client $client
     *
     * @return Save
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
     * @return Save
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
