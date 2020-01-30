<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PerformanceRepository")
 */
class Performance
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
     * @ORM\ManyToMany(targetEntity="App\Entity\Circassian", mappedBy="Performance")
     */
    private $circassians;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Shows", mappedBy="Performance")
     */
    private $shows;

    public function __construct()
    {
        $this->circassians = new ArrayCollection();
        $this->shows = new ArrayCollection();
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

    /**
     * @return Collection|Circassian[]
     */
    public function getCircassians(): Collection
    {
        return $this->circassians;
    }

    public function addCircassian(Circassian $circassian): self
    {
        if (!$this->circassians->contains($circassian)) {
            $this->circassians[] = $circassian;
            $circassian->addPerformance($this);
        }

        return $this;
    }

    public function removeCircassian(Circassian $circassian): self
    {
        if ($this->circassians->contains($circassian)) {
            $this->circassians->removeElement($circassian);
            $circassian->removePerformance($this);
        }

        return $this;
    }

    /**
     * @return Collection|Shows[]
     */
    public function getShows(): Collection
    {
        return $this->shows;
    }

    public function addShow(Shows $show): self
    {
        if (!$this->shows->contains($show)) {
            $this->shows[] = $show;
            $show->addPerformance($this);
        }

        return $this;
    }

    public function removeShow(Shows $show): self
    {
        if ($this->shows->contains($show)) {
            $this->shows->removeElement($show);
            $show->removePerformance($this);
        }

        return $this;
    }
}
