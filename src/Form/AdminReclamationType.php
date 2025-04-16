<?php
// src/Form/AdminReclamationType.php

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

class AdminReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => ['placeholder' => 'Entrez le titre de la réclamation'],
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
                'label' => 'Email de l\'utilisateur',
                'attr' => ['placeholder' => 'Votre adresse email'],
            ])
            ->add('id_trottinette', IntegerType::class, [
                'label' => 'ID de la trottinette',
                'attr' => ['placeholder' => 'ID de la trottinette concernée'],
            ])
            // Admin-only fields, like status or assignment
/*            ->add('status', TextType::class, [
                'label' => 'Statut',
                'attr' => ['placeholder' => 'État actuel de la réclamation'],
            ])
            ->add('assigned_to', TextType::class, [
                'label' => 'Assigné à',
                'attr' => ['placeholder' => 'Nom de l\'administrateur'],
            ])*/
            ->add('save', SubmitType::class, ['label' => 'Sauvegarder la réclamation']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
