<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\VillageRepository;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: VillageRepository::class)]
#[ApiResource]
class Village
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $townCenter = null;

    #[ORM\Column]
    private ?int $farm = null;

    #[ORM\Column]
    private ?int $stoneMine = null;

    #[ORM\Column]
    private ?int $ironMine = null;

    #[ORM\Column]
    private ?int $barracks = null;

    #[ORM\Column]
    private ?int $trainingGround = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getTownCenter(): ?int
    {
        return $this->townCenter;
    }

    public function setTownCenter(int $townCenter): static
    {
        $this->townCenter = $townCenter;

        return $this;
    }

    public function getFarm(): ?int
    {
        return $this->farm;
    }

    public function setFarm(int $farm): static
    {
        $this->farm = $farm;

        return $this;
    }

    public function getStoneMine(): ?int
    {
        return $this->stoneMine;
    }

    public function setStoneMine(int $stoneMine): static
    {
        $this->stoneMine = $stoneMine;

        return $this;
    }

    public function getIronMine(): ?int
    {
        return $this->ironMine;
    }

    public function setIronMine(int $ironMine): static
    {
        $this->ironMine = $ironMine;

        return $this;
    }

    public function getBarracks(): ?int
    {
        return $this->barracks;
    }

    public function setBarracks(int $barracks): static
    {
        $this->barracks = $barracks;

        return $this;
    }

    public function getTrainingGround(): ?int
    {
        return $this->trainingGround;
    }

    public function setTrainingGround(int $trainingGround): static
    {
        $this->trainingGround = $trainingGround;

        return $this;
    }
}
