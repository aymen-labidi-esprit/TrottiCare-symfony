<?php
namespace App\Dto;

class ReclamationSearchCriteria
{
    public ?\DateTimeInterface $dateDebut = null;
    public ?\DateTimeInterface $dateFin = null;
    public ?string $typeReclamation = null;
    public ?string $userEmail = null;
}
