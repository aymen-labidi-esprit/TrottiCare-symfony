<?php

// src/Form/ReservationSearchType.php
namespace App\Form;

use App\Dto\ReservationSearchCriteria;
use App\Enum\Paiement;
use App\Enum\ReservationStatus;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Date Début après'
            ])
            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Date Fin avant'
            ])
            ->add('status', ChoiceType::class, [
                'choices' => ReservationStatus::cases(),
                'choice_label' => fn($choice) => $choice->label(),
                'required' => false,
                'label' => 'Statut',
            ])
            ->add('paiement', ChoiceType::class, [
                'choices' => Paiement::cases(),
                'choice_label' => fn($choice) => $choice->label(),
                'required' => false,
                'label' => 'Mode de paiement',
            ])
            ->add('montantMin', NumberType::class, [
                'required' => false,
                'label' => 'Montant Min',
            ])
            ->add('montantMax', NumberType::class, [
                'required' => false,
                'label' => 'Montant Max',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationSearchCriteria::class,
            'method' => 'GET', // important for search filters
            'csrf_protection' => false,
        ]);
    }
}
