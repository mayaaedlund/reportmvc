<?php

namespace App\Entity;

use App\Repository\MarineProtectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarineProtectionRepository::class)]
class MarineProtection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\Column]
    private ?int $year2022 = null;

    #[ORM\Column]
    private ?int $year2021 = null;

    #[ORM\Column]
    private ?int $year2020 = null;

    #[ORM\Column]
    private ?int $year2019 = null;

    #[ORM\Column]
    private ?int $year2018 = null;

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

    public function getYear2022(): ?int
    {
        return $this->year2022;
    }

    public function setYear2022(int $year2022): static
    {
        $this->year2022 = $year2022;

        return $this;
    }

    public function getYear2021(): ?int
    {
        return $this->year2021;
    }

    public function setYear2021(int $year2021): static
    {
        $this->year2021 = $year2021;

        return $this;
    }

    public function getYear2020(): ?int
    {
        return $this->year2020;
    }

    public function setYear2020(int $year2020): static
    {
        $this->year2020 = $year2020;

        return $this;
    }

    public function getYear2019(): ?int
    {
        return $this->year2019;
    }

    public function setYear2019(int $year2019): static
    {
        $this->year2019 = $year2019;

        return $this;
    }

    public function getYear2018(): ?int
    {
        return $this->year2018;
    }

    public function setYear2018(int $year2018): static
    {
        $this->year2018 = $year2018;

        return $this;
    }
}
