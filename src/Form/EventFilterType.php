<?php
// src/Form/EventFilterType.php
namespace App\Form;

use App\Enum\GouvernoratEnum; // Import if filtering by Gouvernorat
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('search', TextType::class, [
                'label' => 'Rechercher',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Titre, Description, Lieu...',
                    'class' => 'form-input', // Tailwind class
                ],
            ])
            // Status Filter
            ->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'required' => false,
                'placeholder' => 'Tous les statuts',
                'choices' => [ // Map labels to database values
                    'À venir' => 'A_VENIR',
                    'En cours' => 'EN_COURS',
                    'Terminé' => 'TERMINE',
                    'Annulé' => 'ANNULE',
                ],
                'attr' => [
                    'class' => 'form-select', // Tailwind class
                ],
            ])
            // Date Filter (Simplified)
            ->add('date_filter', ChoiceType::class, [
                'label' => 'Période',
                'required' => false,
                'placeholder' => 'Toutes les dates',
                'choices' => [
                    'Événements à venir' => 'upcoming',
                    'Événements passés' => 'past',
                ],
                'attr' => [
                    'class' => 'form-select', // Tailwind class
                ],
            ])
            // Optional: Add Gouvernorat filter if needed
            // ->add('state', ChoiceType::class, [
            //     'label' => 'Gouvernorat',
            //     'required' => false,
            //     'placeholder' => 'Tous les gouvernorats',
            //     'choices' => array_flip(GouvernoratEnum::getChoicesForForm()), // Adjust if getChoicesForForm exists
            //     'attr' => ['class' => 'form-select'],
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'method' => 'GET',
            'csrf_protection' => false,
            'data_class' => null,
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'event_filter'; // Unique prefix
    }
}