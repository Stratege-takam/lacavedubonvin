<?php

namespace Web\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enterprise
 *
 * @ORM\Table(name="enterprise")
 * @ORM\Entity(repositoryClass="Web\EntityBundle\Repository\EnterpriseRepository")
 */
class Enterprise extends User
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
     * @ORM\Column(name="enterprise", type="string", length=255, nullable=true, unique=true)
     */
    private $enterprise;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="chiffreAffaire", type="string", length=255)
     */
    private $chiffreAffaire;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="taxpayNumber", type="string", length=255)
     */
    private $taxpayNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var array
     *
     * @ORM\Column(name="banner", type="array")
     */
    private $banner;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;


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
     * Set enterprise
     *
     * @param string $enterprise
     *
     * @return Enterprise
     */
    public function setEnterprise($enterprise)
    {
        $this->enterprise = $enterprise;

        return $this;
    }

    /**
     * Get enterprise
     *
     * @return string
     */
    public function getEnterprise()
    {
        return $this->enterprise;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Enterprise
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
     * Set chiffreAffaire
     *
     * @param string $chiffreAffaire
     *
     * @return Enterprise
     */
    public function setChiffreAffaire($chiffreAffaire)
    {
        $this->chiffreAffaire = $chiffreAffaire;

        return $this;
    }

    /**
     * Get chiffreAffaire
     *
     * @return string
     */
    public function getChiffreAffaire()
    {
        return $this->chiffreAffaire;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Enterprise
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Enterprise
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set taxpayNumber
     *
     * @param string $taxpayNumber
     *
     * @return Enterprise
     */
    public function setTaxpayNumber($taxpayNumber)
    {
        $this->taxpayNumber = $taxpayNumber;

        return $this;
    }

    /**
     * Get taxpayNumber
     *
     * @return string
     */
    public function getTaxpayNumber()
    {
        return $this->taxpayNumber;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Enterprise
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set banner
     *
     * @param array $banner
     *
     * @return Enterprise
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return array
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Enterprise
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }
}

