<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: "App\Repository\DecisionRepository")]
class Decision
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $name;

    #[ORM\Column(type: "integer")]
    private ?int $year;

    #[ORM\Column(type: "integer")]
    private ?int $month;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $link;

    #[ORM\ManyToOne(targetEntity: "App\Entity\Category", inversedBy: "decisions")]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $summary;

    #[ORM\Column(type: "date", nullable: true)]
    private ?\DateTimeInterface $date;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $title;

    #[ORM\Column(type: "string", length: 36, nullable: true)]
    private ?string $entityId;

    #[ORM\Column(type: "string", length: 50, nullable: true)]
    private ?string $status;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTimeInterface $lastUpdated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getMonth(): ?int
    {
        return $this->month;
    }

    public function setMonth(int $month): self
    {
        $this->month = $month;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    public function setEntityId(?string $entityId): self
    {
        $this->entityId = $entityId;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLastUpdated(): ?\DateTimeInterface
    {
        return $this->lastUpdated;
    }

    public function setLastUpdated(?\DateTimeInterface $lastUpdated): self
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }
}
