<?php

namespace App\Enum;

enum MaintenanceTypeEnum: string
{
    const REPARATION = 'REPARATION';
    const ENTRETIEN = 'ENTRETIEN';
    const VERIFICATION = 'VERIFICATION';
    const AUTRE = 'AUTRE';


}