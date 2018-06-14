<?php

namespace PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * professional_activities
 *
 * @ORM\Table(name="professional_activities")
 * @ORM\Entity(repositoryClass="PortfolioBundle\Repository\professional_activitiesRepository")
 */
class professional_activities
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
     * @ORM\Column(name="profession", type="string", length=255)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="employer", type="string", length=255)
     */
    private $employer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_entry", type="datetime")
     */
    private $dateOfEntry;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="tasks", type="string", length=255)
     */
    private $tasks;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="PortfolioBundle\Entity\Users",inversedBy="experiences")
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
     * Set profession
     *
     * @param string $profession
     *
     * @return professional_activities
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set employer
     *
     * @param string $employer
     *
     * @return professional_activities
     */
    public function setEmployer($employer)
    {
        $this->employer = $employer;

        return $this;
    }

    /**
     * Get employer
     *
     * @return string
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Set dateOfEntry
     *
     * @param \DateTime $dateOfEntry
     *
     * @return professional_activities
     */
    public function setDateOfEntry($dateOfEntry)
    {
        $this->dateOfEntry = $dateOfEntry;

        return $this;
    }

    /**
     * Get dateOfEntry
     *
     * @return \DateTime
     */
    public function getDateOfEntry()
    {
        return $this->dateOfEntry;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return professional_activities
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

    /**
     * Set tasks
     *
     * @param string $tasks
     *
     * @return professional_activities
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;

        return $this;
    }

    /**
     * Get tasks
     *
     * @return string
     */
    public function getTasks()
    {
        return $this->tasks;
    }
}

