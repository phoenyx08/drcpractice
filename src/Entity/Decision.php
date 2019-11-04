<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DecisionRepository")
 */
class Decision
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
     * @ORM\Column(type="integer")
     */
    private $Year;

    /**
     * @ORM\Column(type="integer")
     */
    private $Month;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Link;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="decisions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Category;

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

    public function getYear(): ?int
    {
        return $this->Year;
    }

    public function setYear(int $Year): self
    {
        $this->Year = $Year;

        return $this;
    }

    public function getMonth(): ?int
    {
        return $this->Month;
    }

    public function setMonth(int $Month): self
    {
        $this->Month = $Month;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->Link;
    }

    public function setLink(string $Link): self
    {
        $this->Link = $Link;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->Category;
    }

    public function setCategory(?Category $Category): self
    {
        $this->Category = $Category;

        return $this;
    }
}
