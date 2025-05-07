<?php
// src/Form/TrottinetteFilterType.php
namespace App\Form;

use App\Enum\TrottinetteStatus; // Import the status enum
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrottinetteFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('search', TextType::class, [
                'label' => 'Rechercher',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Modèle, N° Série, Lieu...',
                    'class' => 'form-input', // Tailwind class
                ],
            ])
            ->add('etat', ChoiceType::class, [ // Use 'etat' matching the entity property
                'label' => 'État',
                'required' => false,
                'placeholder' => 'Tous les états',
                'choices' => TrottinetteStatus::choicesForForm(), // Use a helper method in Enum if you have one
                // OR list them manually:
                // 'choices' => [
                //     'Disponible' => TrottinetteStatus::DISPONIBLE->value,
                //     'En Location' => TrottinetteStatus::EN_LOCATION->value,
                //     'En Maintenance' => TrottinetteStatus::EN_MAINTENANCE->value,
                // ],
                'attr' => [
                    'class' => 'form-select', // Tailwind class
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'method' => 'GET',
            'csrf_protection' => false,
            'data_class' => null, // No specific data class for filter form
        ]);
    }

    // Optional: Define a block prefix
    public function getBlockPrefix(): string
    {
        return 'trottinette_filter';
    }
}