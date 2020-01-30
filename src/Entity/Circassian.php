<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CircassianRepository")
 */
class Circassian
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lastname;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Performance", inversedBy="circassians")
     */
    private $Performance;

    public function __construct()
    {
        $this->Performance = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->Firstname;
    }

    public function setFirstname(string $Firstname): self
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->Lastname;
    }

    public function setLastname(string $Lastname): self
    {
        $this->Lastname = $Lastname;

        return $this;
    }

    /**
     * @return Collection|Performance[]
     */
    public function getPerformance(): Collection
    {
        return $this->Performance;
    }

    public function addPerformance(Performance $performance): self
    {
        if (!$this->Performance->contains($performance)) {
            $this->Performance[] = $performance;
        }

        return $this;
    }

    public function removePerformance(Performance $performance): self
    {
        if ($this->Performance->contains($performance)) {
            $this->Performance->removeElement($performance);
        }

        return $this;
    }
}
