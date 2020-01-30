<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShowsRepository")
 */
class Shows
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Image;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\City", inversedBy="shows")
     */
    private $City;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Performance", inversedBy="shows")
     */
    private $Performance;

    public function __construct()
    {
        $this->City = new ArrayCollection();
        $this->Performance = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    /**
     * @return Collection|City[]
     */
    public function getCity(): Collection
    {
        return $this->City;
    }

    public function addCity(City $city): self
    {
        if (!$this->City->contains($city)) {
            $this->City[] = $city;
        }

        return $this;
    }

    public function removeCity(City $city): self
    {
        if ($this->City->contains($city)) {
            $this->City->removeElement($city);
        }

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
