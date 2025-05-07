<?php
// src/Form/UserFilterType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SearchType; // Use SearchType
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('search', SearchType::class, [ // Use SearchType for semantics
                'label' => false, // Hide label, use placeholder
                'required' => false,
                'attr' => [
                    'placeholder' => 'Rechercher (Nom, Prénom, Email)...',
                    'class' => 'form-control-sm' // Optional smaller input
                ]
            ])
            ->add('role', ChoiceType::class, [
                'label' => false, // Hide label
                'required' => false,
                'placeholder' => 'Tous les rôles',
                'choices' => [
                    'Client' => 'client',
                    'Partenaire' => 'partenaire',
                    'Administrateur' => 'admin',
                ],
                'attr' => ['class' => 'form-select form-select-sm'] // Optional smaller select
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'method' => 'GET', // Use GET for filters
            'csrf_protection' => false, // No CSRF needed for GET filters
            'attr' => ['class' => 'row gx-2 gy-2 align-items-center filter-form'], // Add class for styling form row
        ]);
    }

    // Return empty block prefix to avoid prefixing field names in query string
    public function getBlockPrefix(): string
    {
        return '';
    }
}