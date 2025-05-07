<?php
// src/Form/ResetPasswordRequestFormType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use App\Validator\RecaptchaV2; // Import the custom constraint

class ResetPasswordRequestFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Votre adresse e-mail',
                'attr' => ['autocomplete' => 'email', 'placeholder' => 'adresse@example.com'],
                'constraints' => [
                    new NotBlank([ 'message' => 'Veuillez entrer votre adresse e-mail', ]),
                    // ---> Apply the reCAPTCHA constraint here <---
                    // It doesn't matter which field it's attached to,
                    // as the validator checks the request data directly.
                    // Applying it to the email field is convenient.
                    new RecaptchaV2(),
                ],
                'help' => 'Entrez l\'adresse e-mail associée à votre compte.',
            ])
            // NO CaptchaType field needed here anymore
            // ->add('captcha', CaptchaType::class, [ ... ]) // REMOVE THIS LINE
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}