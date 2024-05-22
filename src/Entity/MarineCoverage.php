<?php

namespace App\Entity;

use App\Repository\MarineCoverageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarineCoverageRepository::class)]
class MarineCoverage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\Column]
    private ?int $percentage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getPercentage(): ?int
    {
        return $this->percentage;
    }

    public function setPercentage(int $percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }
}
