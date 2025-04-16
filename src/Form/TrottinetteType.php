<?php

namespace App\Form;

use App\Entity\Trottinette;
use App\Enum\TrottinetteStatus;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class TrottinetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('modele', TextType::class, [
                'label' => 'Modèle',
                'required' => true,
                'attr' => ['class' => 'form-control'],
                'error_bubbling' => true
            ])
            ->add('numeroSerie', TextType::class, [
                'label' => 'Numéro de Série',
                'required' => true,
                'attr' => ['class' => 'form-control'],
                'error_bubbling' => true
            ])
            ->add('etat', EnumType::class, [
                'class' => TrottinetteStatus::class,
                'label' => 'État',
                'required' => true,
                'choice_label' => fn (TrottinetteStatus $choice): string => match($choice) {
                    TrottinetteStatus::DISPONIBLE => 'Disponible',
                    TrottinetteStatus::EN_LOCATION => 'En Location',
                    TrottinetteStatus::EN_MAINTENANCE => 'En Maintenance',
                },
                'attr' => ['class' => 'form-select'],
                'error_bubbling' => true
            ])
            ->add('batterie', IntegerType::class, [
                'label' => 'Batterie (%)',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ],
                'error_bubbling' => true
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation',
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'error_bubbling' => true
            ])
            ->add('autonomie', TextType::class, [
                'label' => 'Autonomie',
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'error_bubbling' => true
            ])
            ->add('pointRelaisId', IntegerType::class, [
                'label' => 'Point Relais ID',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'readonly' => true,
                ],
                'error_bubbling' => true
            ]);
            
        // Add a form event listener to capture validation errors
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();
            
            // Custom validation can be added here if needed
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trottinette::class,
            'html5_validation' => false,
            'attr' => ['novalidate' => 'novalidate'], // Disable HTML5 validation
        ]);
    }
}