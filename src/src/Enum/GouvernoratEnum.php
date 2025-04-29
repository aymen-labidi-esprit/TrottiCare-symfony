<?php

namespace App\Enum;

enum GouvernoratEnum: string
{
    case ARIANA = 'Ariana';
    case BEJA = 'Béja';
    case BEN_AROUS = 'Ben Arous';
    case BIZERTE = 'Bizerte';
    case GABES = 'Gabès';
    case GAFSA = 'Gafsa';
    case JENDOUBA = 'Jendouba';
    case KAIROUAN = 'Kairouan';
    case KASSERINE = 'Kasserine';
    case KEBILI = 'Kébili';
    case KEF = 'Le Kef';
    case MAHDIA = 'Mahdia';
    case MANOUBA = 'La Manouba';
    case MEDENINE = 'Médenine';
    case MONASTIR = 'Monastir';
    case NABEUL = 'Nabeul';
    case SFAX = 'Sfax';
    case SIDI_BOUZID = 'Sidi Bouzid';
    case SILIANA = 'Siliana';
    case SOUSSE = 'Sousse';
    case TATAOUINE = 'Tataouine';
    case TOZEUR = 'Tozeur';
    case TUNIS = 'Tunis';
    case ZAGHOUAN = 'Zaghouan';
    
    /**
     * Returns all available choices as an array
     * @return array<string, string>
     */
    public static function getChoicesForForm(): array
    {
        $choices = [];
        foreach (self::cases() as $case) {
            $choices[$case->value] = $case->name;
        }
        return $choices;
    }


    
    /**
     * Returns the string representation of this enum (its value)
     * @return string
     */
    public function toString(): string
    {

        return $this->value;
    }

    /**
     * Retourne une étiquette lisible (label) pour chaque case.
     */
    public function label(): string
    {

        return match ($this) {
            self::ARIANA => 'Ariana',
            self::BEJA => 'Béja',
            self::BEN_AROUS => 'Ben Arous',
            self::BIZERTE => 'Bizerte',
            self::GABES => 'Gabès',
            self::GAFSA => 'Gafsa',
            self::JENDOUBA => 'Jendouba',
            self::KAIROUAN => 'Kairouan',
            self::KASSERINE => 'Kasserine',
            self::KEBILI => 'Kébili',
            self::KEF => 'Le Kef',
            self::MAHDIA => 'Mahdia',
            self::MANOUBA => 'La Manouba',
            self::MEDENINE => 'Médenine',
            self::MONASTIR => 'Monastir',
            self::NABEUL => 'Nabeul',
            self::SFAX => 'Sfax',
            self::SIDI_BOUZID => 'Sidi Bouzid',
            self::SILIANA => 'Siliana',
            self::SOUSSE => 'Sousse',
            self::TATAOUINE => 'Tataouine',
            self::TOZEUR => 'Tozeur',
            self::TUNIS => 'Tunis',
            self::ZAGHOUAN => 'Zaghouan',
        };
    }



}