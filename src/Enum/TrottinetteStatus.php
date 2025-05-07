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
    /**
     * Provides a user-friendly label for each status.
     */
    public function label(): string // Renamed from toString for clarity, can keep toString if preferred
    {
        return match($this) {
            self::DISPONIBLE => 'Disponible',
            self::EN_LOCATION => 'En Location',
            self::EN_MAINTENANCE => 'En Maintenance'
        };
    }
    /**
     * Returns an array suitable for Symfony Form ChoiceType choices.
     * Format: ['Label visible to user' => 'Database/Enum Value', ...]
     *
     * @return array<string, string>
     */
    public static function choicesForForm(): array
    {
        $choices = [];
        foreach (self::cases() as $case) {
            // Use the label() method for the user-visible key
            // Use the enum's value for the actual submitted value
            $choices[$case->label()] = $case->value;
        }
        return $choices;

        /* Example output:
         * [
         *   'Disponible' => 'DISPONIBLE',
         *   'En Location' => 'EN_LOCATION',
         *   'En Maintenance' => 'EN_MAINTENANCE',
         * ]
         */
    }
}