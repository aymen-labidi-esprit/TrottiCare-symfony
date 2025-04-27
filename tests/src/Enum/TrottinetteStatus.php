<?php

namespace App\Enum;

enum TrottinetteStatus: string
{
    case DISPONIBLE = 'DISPONIBLE';
    case EN_LOCATION = 'EN_LOCATION';
    case EN_MAINTENANCE = 'EN_MAINTENANCE';

    public function toString(): string
    {
        return match($this) {
            self::DISPONIBLE => 'Disponible',
            self::EN_LOCATION => 'En Location',
            self::EN_MAINTENANCE => 'En Maintenance'
        };
    }
}