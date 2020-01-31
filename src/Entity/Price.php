<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PriceRepository")
 */
class Price
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $Adult;

    /**
     * @ORM\Column(type="float")
     */
    private $Children;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdult(): ?float
    {
        return $this->Adult;
    }

    public function setAdult(float $Adult): self
    {
        $this->Adult = $Adult;

        return $this;
    }

    public function getChildren(): ?float
    {
        return $this->Children;
    }

    public function setChildren(float $Children): self
    {
        $this->Children = $Children;

        return $this;
    }
}
