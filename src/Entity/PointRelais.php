<?php

namespace App\Entity;

use App\Repository\PointRelaisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

    private ?\DateTimeInterface $HoraireOuverture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAddresse(): ?string
    {
        return $this->addresse;
    }

    public function setAddresse(?string $addresse): static
    {
        $this->addresse = $addresse;

        return $this;
    }

    public function getHoraireOuverture(): ?\DateTimeInterface
    {
        return $this->HoraireOuverture;
    }

    public function setHoraireOuverture(?\DateTimeInterface $HoraireOuverture): static
    {
        $this->HoraireOuverture = $HoraireOuverture;

        return $this;
    }
}
