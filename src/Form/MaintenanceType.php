<?php

namespace App\Form;

use App\Entity\Maintenance;
use App\Entity\Trottinette;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaintenanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('trottinette', EntityType::class, [
                'class' => Trottinette::class,
                'choice_label' => function(Trottinette $trottinette) {
                    return sprintf('%s - %s', $trottinette->getModele(), $trottinette->getNumeroSerie());
                },
                'label' => 'Trottinette',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('dateDebut', DateTimeType::class, [
                'label' => 'Date de début',
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('dateFin', DateTimeType::class, [
                'label' => 'Date de fin',
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 4]
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'required' => false,
                'choices' => [
                    'En cours' => 'EN_COURS',
                    'Terminée' => 'TERMINEE', // ✔ valeur correcte attendue par l'entité
                    'Annulée' => 'ANNULEE'
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de maintenance',
                'choices' => [
                    'Réparation' => 'REPARATION',
                    'Entretien' => 'ENTRETIEN',
                    'Inspection' => 'VERIFICATION',
                ],
                'required' => false,
                'attr' => ['class' => 'form-control']
            ]);
            
            // Add trottinette field at the beginning of the form
            $builder->get('trottinette')->setRequired(true);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Maintenance::class,
            'html5_validation' => false,
        ]);
    }
}