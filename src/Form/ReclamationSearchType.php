<?php
namespace App\Form;

use App\Dto\ReclamationSearchCriteria;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Date Création Après',
            ])
            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Date Création Avant',
            ])
            ->add('typeReclamation', TextType::class, [
                'required' => false,
                'label' => 'Type de Réclamation',
            ])
            ->add('userEmail', TextType::class, [
                'required' => false,
                'label' => 'Email Utilisateur',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReclamationSearchCriteria::class,
            'method' => 'GET',
            'csrf_protection' => false,
        ]);
    }
}
