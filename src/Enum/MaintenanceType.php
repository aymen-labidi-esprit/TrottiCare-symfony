<?php

namespace App\Enum;

enum MaintenanceType: string
{
    case REPARATION = 'REPARATION';
    case ENTRETIEN = 'ENTRETIEN';
    case VERIFICATION = 'VERIFICATION';
    case AUTRE = 'AUTRE';
}