<?php

namespace App\Entity;

use App\Repository\SustainableFishRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SustainableFishRepository::class)]
class SustainableFish
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\Column]
    private ?int $sustainable_percentage = null;

    #[ORM\Column]
    private ?int $sustainable_amount = null;

    #[ORM\Column]
    private ?int $assessed_amount = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSustainablePercentage(): ?int
    {
        return $this->sustainable_percentage;
    }

    public function setSustainablePercentage(int $sustainable_percentage): static
    {
        $this->sustainable_percentage = $sustainable_percentage;

        return $this;
    }

    public function getSustainableAmount(): ?int
    {
        return $this->sustainable_amount;
    }

    public function setSustainableAmount(int $sustainable_amount): static
    {
        $this->sustainable_amount = $sustainable_amount;

        return $this;
    }

    public function getAssessedAmount(): ?int
    {
        return $this->assessed_amount;
    }

    public function setAssessedAmount(int $assessed_amount): static
    {
        $this->assessed_amount = $assessed_amount;

        return $this;
    }
}
