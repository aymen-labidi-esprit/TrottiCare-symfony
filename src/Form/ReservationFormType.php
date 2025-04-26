<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Enum\ReservationStatus;
use App\Enum\Paiement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateReservation', DateType::class, [
                'widget' => 'single_text',
                'required' => true,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('montant', NumberType::class, [
                'required' => true,
                'scale' => 0,
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'min' => 1,
                    'step' => 1,
                ]
            ])
            ->add('status', ChoiceType::class, [
                'required' => true,
                'choices' => ReservationStatus::cases(),
                'choice_label' => fn (ReservationStatus $status) => $status->label(),
                'choice_value' => fn (?ReservationStatus $status) => $status?->value,
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('paiement', ChoiceType::class, [
                'required' => true,
                'choices' => Paiement::cases(),
                'choice_label' => fn (Paiement $paiement) => $paiement->label(),
                'choice_value' => fn (?Paiement $paiement) => $paiement?->value,
                'attr' => [
                    'class' => 'form-select'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
