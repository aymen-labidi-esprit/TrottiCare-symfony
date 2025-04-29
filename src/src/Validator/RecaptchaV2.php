<?php
// src/Validator/RecaptchaV2.php
namespace App\Validator;

use Symfony\Component\Validator\Constraint;

#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class RecaptchaV2 extends Constraint
{
    public string $message = 'La vérification reCAPTCHA a échoué. Veuillez réessayer.';
    public string $invalidInputMessage = 'La réponse reCAPTCHA n\'est pas valide.';
}