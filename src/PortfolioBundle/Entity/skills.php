<?php

namespace PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * skills
 *
 * @ORM\Table(name="skills")
 * @ORM\Entity(repositoryClass="PortfolioBundle\Repository\skillsRepository")
 */
class skills
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
     * @ORM\Column(name="entitled", type="string", length=255)
     */
    private $entitled;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptive", type="string", length=255)
     */
    private $descriptive;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="PortfolioBundle\Entity\Users",inversedBy="skills")
     */
    private $user;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
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

    /**
     * Set entitled
     *
     * @param string $entitled
     *
     * @return skills
     */
    public function setEntitled($entitled)
    {
        $this->entitled = $entitled;

        return $this;
    }

    /**
     * Get entitled
     *
     * @return string
     */
    public function getEntitled()
    {
        return $this->entitled;
    }

    /**
     * Set descriptive
     *
     * @param string $descriptive
     *
     * @return skills
     */
    public function setDescriptive($descriptive)
    {
        $this->descriptive = $descriptive;

        return $this;
    }

    /**
     * Get descriptive
     *
     * @return string
     */
    public function getDescriptive()
    {
        return $this->descriptive;
    }
}

