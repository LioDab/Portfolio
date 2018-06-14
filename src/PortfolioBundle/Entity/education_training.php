<?php

namespace PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * education_training
 *
 * @ORM\Table(name="education_training")
 * @ORM\Entity(repositoryClass="PortfolioBundle\Repository\education_trainingRepository")
 */
class education_training
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
     * @ORM\Column(name="institute", type="string", length=255)
     */
    private $institute;

    /**
     * @var string
     *
     * @ORM\Column(name="subjects_studied", type="string", length=255)
     */
    private $subjectsStudied;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="datetime")
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="PortfolioBundle\Entity\Users",inversedBy="educations")
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
     * Set institute
     *
     * @param string $institute
     *
     * @return education_training
     */
    public function setInstitute($institute)
    {
        $this->institute = $institute;

        return $this;
    }

    /**
     * Get institute
     *
     * @return string
     */
    public function getInstitute()
    {
        return $this->institute;
    }

    /**
     * Set subjectsStudied
     *
     * @param string $subjectsStudied
     *
     * @return education_training
     */
    public function setSubjectsStudied($subjectsStudied)
    {
        $this->subjectsStudied = $subjectsStudied;

        return $this;
    }

    /**
     * Get subjectsStudied
     *
     * @return string
     */
    public function getSubjectsStudied()
    {
        return $this->subjectsStudied;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return education_training
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return education_training
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
}

