<?php
namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="jobs")
 */
class Job
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="jobs")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id", nullable=FALSE)
     */
    protected $person;

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="jobs")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id", nullable=FALSE)
     */
    protected $company;

    /**
     * @ORM\Column(type="date", name="started_on")
     */
    protected $startedOn;

    /**
     * @ORM\Column(type="integer", name="monthly_salary")
     */
    protected $monthlySalary;

    public function getId()
    {
        return $this->id;
    }

    public function getPerson()
    {
        return $this->person;
    }

    public function setPerson(Person $person = null)
    {
        $this->person = $person;
        return $this;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany(Company $company = null)
    {
        $this->company = $company;
        return $this;
    }

    public function getStartedOn()
    {
        return $this->startedOn;
    }

    public function setStartedOn(\DateTime $startedOn)
    {
        $this->startedOn = $startedOn;
        return $this;
    }

    public function getMonthlySalary()
    {
        return $this->monthlySalary;
    }

    public function setMonthlySalary($monthlySalary)
    {
        $this->monthlySalary = $monthlySalary;
        return $this;
    }
}
