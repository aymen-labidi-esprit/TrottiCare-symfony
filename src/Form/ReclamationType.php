<?php

// src/Form/ReclamationType.php
namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Trottinette;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type_reclamation', ChoiceType::class, [
                'label' => 'Type de Réclamation',
                'choices' => [
                    'Problème Technique' => 'TECHNIQUE',
                    'Service Client' => 'SERVICE',
                    'Facturation' => 'FACTURATION',
                    'Événement' => 'EVENEMENT',
                    'Autre' => 'AUTRE',
                ],
                'placeholder' => 'Choisissez le type',
                'attr' => ['class' => 'form-select'],
                'required' => true,
            ])
            ->add('user_email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['class' => 'form-control'],
                'required' => true,
            ])
            ->add('trottinette', EntityType::class, [
                'class' => Trottinette::class,
                'choice_label' => 'id', // Affiche uniquement l'ID
                'label' => 'Trottinette (ID)',
                'required' => false,
                'placeholder' => 'Aucune / Non applicable',
                'attr' => ['class' => 'form-select'],
                'query_builder' => function ($er) {
                    return $er->createQueryBuilder('t')->orderBy('t.id', 'ASC');
                },
            ])
            ->add('titre', TextType::class, [
                'label' => 'Sujet / Titre',
                'attr' => ['placeholder' => 'Ex: Problème de frein sur la trottinette #123'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description Détaillée',
                'attr' => ['rows' => 5, 'placeholder' => 'Veuillez décrire le problème ou votre demande...'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}
