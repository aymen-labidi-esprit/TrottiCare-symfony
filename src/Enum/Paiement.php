<?php
namespace App\Enum;

enum Paiement: string
{
    case CARTE = 'carte';
    case CHEQUE = 'cheque';
    case ESPECE = 'espece';

    public function label(): string
    {
        return match($this) {
            self::CARTE => 'Carte bancaire',
            self::CHEQUE => 'Chèque',
            self::ESPECE => 'Espèce',
        };
    }
}
