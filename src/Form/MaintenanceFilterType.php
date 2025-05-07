<?php
// src/Form/MaintenanceFilterType.php
namespace App\Form;

use App\Enum\MaintenanceStatus; // Import your enum if you use it
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaintenanceFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('search', TextType::class, [
                'label' => 'Rechercher',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Description, ID Trottinette...',
                    'class' => 'form-input', // Add your Tailwind class
                ],
            ])
            ->add('statut', ChoiceType::class, [ // Use 'statut' to match entity property
                'label' => 'Statut',
                'required' => false,
                'placeholder' => 'Tous les statuts', // Optional placeholder
                'choices' => [
                    // Use the enum values or strings directly
                    'En cours' => 'EN_COURS', // Match the values stored in DB / Enum
                    'Terminée' => 'TERMINEE',
                    'Annulée' => 'ANNULEE',
                    // If using an Enum:
                    // 'En cours' => MaintenanceStatus::EN_COURS->value,
                    // 'Terminée' => MaintenanceStatus::TERMINEE->value,
                    // 'Annulée' => MaintenanceStatus::ANNULEE->value,
                ],
                'attr' => [
                    'class' => 'form-select', // Add your Tailwind class
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
            'method' => 'GET', // Use GET for filter forms
            'csrf_protection' => false, // Disable CSRF for GET filters
            'data_class' => null, // Filter forms typically don't map to a specific entity instance
        ]);
    }

    // Optional: Define a block prefix if needed (helps avoid form name conflicts)
    public function getBlockPrefix(): string
    {
        return 'maintenance_filter'; // Prevents form fields like name="search"
        // instead uses name="maintenance_filter[search]"
    }
}