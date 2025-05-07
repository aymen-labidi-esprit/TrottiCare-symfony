<?php

namespace App\Twig;

use App\Enum\GouvernoratEnum;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('enum_value', [$this, 'getEnumValue']),
        ];
    }

    public function getEnumValue($enum)
    {
        if ($enum instanceof GouvernoratEnum) {
            return $enum->value;
        }
        
        if (is_object($enum) && property_exists($enum, 'value')) {
            return $enum->value;
        }
        
        return (string) $enum;
    }
}
