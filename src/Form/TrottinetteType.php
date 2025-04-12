<?php

namespace App\Form;

use App\Entity\Trottinette;
use App\Enum\TrottinetteStatus;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrottinetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('modele', TextType::class, [
                'label' => 'Modèle',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('numeroSerie', TextType::class, [
                'label' => 'Numéro de Série',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'État',
                'choices' => TrottinetteStatus::cases(),
                'choice_label' => fn(TrottinetteStatus $status) => $status->toString(),
                'choice_value' => fn(?TrottinetteStatus $status) => $status?->value,
                'attr' => ['class' => 'form-control']
            ])
            ->add('batterie', IntegerType::class, [
                'label' => 'Batterie (%)',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0,
                    'max' => 100
                ]
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('autonomie', TextType::class, [
                'label' => 'Autonomie',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('pointRelaisId', IntegerType::class, [
                'label' => 'Point Relais ID',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'readonly' => true,
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trottinette::class,
        ]);
    }
}