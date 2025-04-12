<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    // ...existing code...

    // Change this property name from 'type' to 'typeReclamation' to match your database column
    #[ORM\Column(name: "type_reclamation", type: "string", length: 255)]
    private ?string $typeReclamation = null;

    // ...existing code...

    public function getTypeReclamation(): ?string
    {
        return $this->typeReclamation;
    }

    public function setTypeReclamation(string $typeReclamation): self
    {
        $this->typeReclamation = $typeReclamation;
        return $this;
    }

    // Remove any methods referencing 'type' if they exist
    // and replace with the methods above for 'typeReclamation'
}
