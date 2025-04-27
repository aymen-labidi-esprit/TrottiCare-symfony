<?php

namespace App\Enum;

enum MaintenanceStatus: string
{
    case EN_COURS = 'EN_COURS';
    case TERMINE = 'TERMINE';
    case ANNULEE = 'ANNULEE';


}