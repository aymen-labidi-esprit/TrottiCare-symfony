<?php
// src/Form/PublicTrottinetteFilterType.php
namespace App\Form;

use App\Enum\TrottinetteStatus;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType; // Use NumberType for range inputs
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert; // For validation

class PublicTrottinetteFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('search', TextType::class, [
                'label' => 'Rechercher',
                'label_attr' => ['class' => 'sr-only'], // Visually hidden label
                'required' => false,
                'attr' => [
                    'placeholder' => 'Modèle, Lieu...',
                    'class' => 'form-input text-sm', // Tailwind class
                ],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'État',
                'label_attr' => ['class' => 'sr-only'], // Visually hidden label
                'required' => false,
                'placeholder' => 'Tous les états',
                // Filter only for relevant public statuses (e.g., Disponible)
                'choices' => [
                    'Disponible' => TrottinetteStatus::DISPONIBLE->value,
                    // Add others if needed, but usually public only sees available
                ],
                'attr' => [
                    'class' => 'form-select text-sm', // Tailwind class
                ],
            ])
            ->add('batterie_min', NumberType::class, [
                'label' => 'Batterie Min.',
                'label_attr' => ['class' => 'sr-only'],
                'required' => false,
                'html5' => true, // Use HTML5 number input
                'attr' => [
                    'placeholder' => 'Batterie Min (%)',
                    'min' => 0,
                    'max' => 100,
                    'step' => 5,
                    'class' => 'form-input text-sm',
                ],
                'constraints' => [
                    new Assert\Range(['min' => 0, 'max' => 100, 'notInRangeMessage' => 'Doit être entre 0 et 100%']),
                    new Assert\Type(['type' => 'numeric', 'message' => 'Doit être un nombre.'])
                ]
            ])
            ->add('autonomie_min', NumberType::class, [ // Filter by numeric value
                'label' => 'Autonomie Min.',
                'label_attr' => ['class' => 'sr-only'],
                'required' => false,
                'html5' => true,
                'attr' => [
                    'placeholder' => 'Autonomie Min (km)',
                    'min' => 0,
                    'step' => 1,
                    'class' => 'form-input text-sm',
                ],
                'constraints' => [
                    new Assert\PositiveOrZero(['message' => 'Doit être un nombre positif.']),
                    new Assert\Type(['type' => 'numeric', 'message' => 'Doit être un nombre.'])
                ]
            ]);
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
        // Return empty to avoid prefixing query params (e.g., ?search=... instead of ?public_trottinette_filter[search]=...)
        return '';
    }
}