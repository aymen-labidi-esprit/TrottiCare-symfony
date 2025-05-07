<?php

namespace App\Enum;

enum MaintenanceType: string
{
    const REPARATION = 'REPARATION';
    const ENTRETIEN = 'ENTRETIEN';
    const VERIFICATION = 'VERIFICATION';
    const AUTRE = 'AUTRE';


}