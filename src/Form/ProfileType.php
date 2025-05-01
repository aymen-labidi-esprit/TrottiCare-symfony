<?php
// src/Form/ProfileType.php
namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
// Add PasswordType/RepeatedType if allowing password change here
// use Symfony\Component\Form\Extension\Core\Type\PasswordType;
// use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
// use Symfony\Component\Validator\Constraints\Length;
// use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse Email',
                'required' => true,
                // 'disabled' => true, // Optionally disable email editing
            ])
            ->add('telephone', TelType::class, [
                'label' => 'Téléphone',
                'required' => false, // Make optional if desired
            ]);

        // Optional: Add password change fields
        /*
        ->add('plainPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'mapped' => false, // Don't map directly to entity password field
            'required' => false, // Password change is optional
            'options' => ['attr' => ['autocomplete' => 'new-password']],
            'first_options' => [
                'label' => 'Nouveau Mot de passe (laisser vide pour ne pas changer)',
                'constraints' => [
                    new Length(['min' => 6, 'max' => 4096]),
                ],
            ],
            'second_options' => [
                'label' => 'Confirmer le nouveau mot de passe',
            ],
            'invalid_message' => 'Les mots de passe doivent correspondre.',
        ])
        */
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            'attr' => ['novalidate' => 'novalidate'], // Disable browser validation if using Symfony validation
        ]);
    }
}