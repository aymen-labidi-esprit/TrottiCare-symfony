<?php
// src/Form/RegistrationFormType.php
namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType; // Add this
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
// REMOVE HiddenType if it was previously imported for face data
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue; // Add this
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Votre nom de famille']
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Votre prénom']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse Email',
                'attr' => ['placeholder' => 'adresse@example.com']
            ])
            ->add('telephone', TelType::class, [
                'label' => 'Numéro de téléphone',
                'attr' => ['placeholder' => 'Ex: +216 XX XXX XXX'],
                'required' => true // Make it required if necessary
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'options' => ['attr' => ['autocomplete' => 'new-password']],
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => ['placeholder' => 'Minimum 6 caractères'],
                    'constraints' => [
                        new NotBlank(['message' => 'Veuillez entrer un mot de passe.']),
                        new Length([
                            'min' => 6,
                            'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères.',
                            'max' => 4096, // Max length supported by Symfony's password hasher
                        ]),
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                    'attr' => ['placeholder' => 'Retapez votre mot de passe'],
                ],
                'invalid_message' => 'Les mots de passe doivent correspondre.',
                // Instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false, // IMPORTANT: Don't map directly to User entity password
            ])
            ->add('agreeTerms', CheckboxType::class, [ // Add Terms agreement
                'label' => 'J\'accepte les conditions d\'utilisation',
                'mapped' => false, // Not mapped to the User entity directly
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter nos conditions.',
                    ]),
                ],
                'row_attr' => ['class' => 'form-check mb-3'], // Styling for checkbox
                'label_attr' => ['class' => 'form-check-label'],
                'attr' => ['class' => 'form-check-input'],
            ]);

        // --- REMOVE THE face_embedding_data FIELD ---
        // ->add('face_embedding_data', HiddenType::class, [
        //     'mapped' => false, // We handle this manually in the controller
        //     'required' => true, // Make it required
        //     'constraints' => [
        //         new NotBlank([
        //             'message' => 'La capture faciale est requise pour l\'inscription.',
        //         ]),
        //         // Optional: Add a custom constraint to validate the format if needed
        //     ],
        //     'label' => false,
        //     'attr' => ['readonly' => true] // For display, actual value set by JS
        // ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            'attr' => ['novalidate' => 'novalidate'], // Disable browser validation if using Symfony's
        ]);
    }
}