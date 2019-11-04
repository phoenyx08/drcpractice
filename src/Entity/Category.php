<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
    private $ShortName;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Body", inversedBy="categories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Body;

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

    public function getShortName(): ?string
    {
        return $this->ShortName;
    }

    public function setShortName(string $ShortName): self
    {
        $this->ShortName = $ShortName;

        return $this;
    }

    public function getBody(): ?Body
    {
        return $this->Body;
    }

    public function setBody(?Body $Body): self
    {
        $this->Body = $Body;

        return $this;
    }
}
