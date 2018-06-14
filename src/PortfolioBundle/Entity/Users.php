<?php

namespace PortfolioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Users
 *
 * @ORM\Table(name="fosusers")
 * @ORM\Entity(repositoryClass="PortfolioBundle\Repository\UsersRepository")
 */
class Users extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string")
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string")
     */
    private $street;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="lacality", type="string")
     */
    private $locality;

    /**
     * @var string
     *
     * @ORM\Column(name="postal", type="string")
     */
    private $postal;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string")
     */
    private $country;

    /**
     * @var ArrayCollection
     *
     *@ORM\OneToMany(targetEntity="PortfolioBundle\Entity\education_training",mappedBy="user")
     */
    private $educations;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="PortfolioBundle\Entity\professional_activities",mappedBy="user")
     */
    private $experiences;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="PortfolioBundle\Entity\linguistic_knowledge",mappedBy="user")
     */
    private $linguistics;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="PortfolioBundle\Entity\hobbies",mappedBy="user")
     */
    private $hobbies;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="PortfolioBundle\Entity\skills",mappedBy="user")
     */
    private $skills;

    /**
     * @return mixed
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param mixed $skills
     */
    public function addSkills(skills $skills)
    {
        $this->skills [] = $skills;
    }

    /**
     * @return mixed
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * @param mixed $hobbies
     */
    public function addHobbies( hobbies $hobbies)
    {
        $this->hobbies [] = $hobbies;
    }

    /**
     * @return mixed
     */
    public function getLinguistics()
    {
        return $this->linguistics;
    }

    /**
     * @param mixed $linguistics
     */
    public function addLinguistics(linguistic_knowledge $linguistics)
    {
        $this->linguistics [] = $linguistics;
    }

//    public function __construct()
//    {
////        parent::__construct();
//        $this->experiences = new ArrayCollection();
//    }

    /**
     * @return ArrayCollection
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * @param ArrayCollection $experiences
     */
    public function addExperiences(professional_activities $experiences)
    {
        $this->experiences[] = $experiences;
    }


//    public function __construct()
//    {
//        parent::__construct();
//        $this->educations = new ArrayCollection();
//    }

    /**
     * @return ArrayCollection
     */
    public function getEducations()
    {
        return $this->educations;
    }

    /**
     * @param ArrayCollection $educations
     */
    public function addEducations(education_training $educations)
    {
        $this->educations[] = $educations;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param string $locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * @return string
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * @param string $postal
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }






    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

