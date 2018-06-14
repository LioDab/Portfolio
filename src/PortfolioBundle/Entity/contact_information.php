<?php

namespace PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contact_information
 *
 * @ORM\Table(name="contact_information")
 * @ORM\Entity(repositoryClass="PortfolioBundle\Repository\contact_informationRepository")
 */
class contact_information
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
     * @Assert\NotBlank()
     * @Assert\Length(min="5",max="20")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(min="5",max="35")
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     * @Assert\Email()
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="pictures_url", type="string", length=255)
     * @Assert\Url()
     */
    private $picturesUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $rue;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     * @Assert\NotBlank()
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="locality", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $locality;

    /**
     * @var int
     *
     * @ORM\Column(name="postal", type="integer")
     * @Assert\NotBlank()
     */
    private $postal;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $country;


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
     * @return contact_information
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
     * Set surname
     *
     * @param string $surname
     *
     * @return contact_information
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return contact_information
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return contact_information
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set picturesUrl
     *
     * @param string $picturesUrl
     *
     * @return contact_information
     */
    public function setPicturesUrl($picturesUrl)
    {
        $this->picturesUrl = $picturesUrl;

        return $this;
    }

    /**
     * Get picturesUrl
     *
     * @return string
     */
    public function getPicturesUrl()
    {
        return $this->picturesUrl;
    }

    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return contact_information
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return contact_information
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set locality
     *
     * @param string $locality
     *
     * @return contact_information
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Get locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Set postal
     *
     * @param integer $postal
     *
     * @return contact_information
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * Get postal
     *
     * @return int
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return contact_information
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}

