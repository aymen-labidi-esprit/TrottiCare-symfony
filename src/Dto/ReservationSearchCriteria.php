<?php

namespace App\Dto;

use App\Enum\ReservationStatus;
use App\Enum\Paiement;

class ReservationSearchCriteria
{
    public ?\DateTimeInterface $dateDebut = null;
    public ?\DateTimeInterface $dateFin = null;
    public ?ReservationStatus $status = null;
    public ?Paiement $paiement = null;
    public ?string $montantMin = null;
    public ?string $montantMax = null;
}
