<?php

namespace App\Enum;

enum MaintenanceStatus: string
{
    case EN_COURS = 'EN_COURS';
    case TERMINE = 'TERMINE';
    case TERMINEE = 'TERMINEE';
    case ANNULEE = 'ANNULEE';


}