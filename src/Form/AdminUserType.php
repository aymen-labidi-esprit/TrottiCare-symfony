<?php
// src/Form/AdminUserType.php
namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;use FOS\CKEditorBundle\Form\Type\CKEditorType;


class AdminUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, ['label' => 'Nom'])
            ->add('prenom', TextType::class, ['label' => 'Prénom'])
            ->add('email', EmailType::class, ['label' => 'Email'])
            ->add('telephone', TelType::class, ['label' => 'Téléphone', 'required' => false])
            // --- ADD CKEDITOR FIELD ---
            ->add('details', TextareaType::class, [ // <-- CHANGE BACK TO TextareaType
                'label' => 'Détails / Bio',
                'required' => false,
                'attr' => [
                    'rows' => 6, // Example attribute
                    'id' => 'user_details_editor' // <-- ADD A SPECIFIC ID
                ]
            ])
            ->add('roleInterne', ChoiceType::class, [
                'label' => 'Rôle',
                'choices' => [
                    'Client' => 'client',
                    'Partenaire' => 'partenaire',
                    'Administrateur' => 'admin',
                ],
                'attr' => ['class' => 'form-select'],
                'placeholder' => 'Choisir un rôle',
            ])
            ->add('isVerified', CheckboxType::class, [
                'label' => 'Compte Vérifié ?',
                'required' => false,
            ])

            ->add('isActive', CheckboxType::class, [
                'label'    => 'Compte Actif ?',
                'required' => false,
                'row_attr' => ['class' => 'form-check form-switch mb-3'],
                'attr'     => ['class' => 'form-check-input'],
                'label_attr' => ['class' => 'form-check-label'],
                'help'     => 'Décochez pour désactiver l’utilisateur.',
            ])


            // --- END CKEDITOR FIELD ---

            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'required' => false,
                'options' => ['attr' => ['autocomplete' => 'new-password']],
                'first_options' => [
                    'label' => 'Nouveau Mot de passe',
                    'help' => 'Laisser vide pour ne pas changer le mot de passe.',
                    'attr' => ['placeholder' => 'Nouveau mot de passe'],
                ],
                'second_options' => [
                    'label' => 'Confirmer le Nouveau Mot de passe',
                    'attr' => ['placeholder' => 'Retapez le mot de passe'],
                ],

                'invalid_message' => 'Les mots de passe doivent correspondre.',
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères.',
                        'max' => 4096,
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}