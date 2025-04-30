<?php
// src/Form/ReclamationType.php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => ['placeholder' => 'Entrez le titre de votre réclamation'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['placeholder' => 'Détaillez votre réclamation'],
            ])
            ->add('type_reclamation', TextType::class, [
                'label' => 'Type de réclamation',
                'attr' => ['placeholder' => 'Ex : Facturation incorrecte'],
            ])
            ->add('user_email', EmailType::class, [
                'label' => 'Votre email',
                'attr' => ['placeholder' => 'Votre adresse email'],
            ])
            ->add('id_trottinette', IntegerType::class, [
                'label' => 'ID de la trottinette',
                'attr' => ['placeholder' => 'ID de la trottinette concernée'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
