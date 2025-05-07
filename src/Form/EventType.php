<?php
// src/Form/EventType.php
namespace App\Form;

use App\Entity\Event;
use App\Enum\GouvernoratEnum; // Import Enum
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; // Keep for status if is_admin_edit
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EnumType; // Use EnumType
use Symfony\Component\Form\Extension\Core\Type\IntegerType; // Use IntegerType
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre de l\'Événement',
                'attr' => ['placeholder' => 'Ex: Balade collective au Parc'],
                'required' => true, // Ensure title is required
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['rows' => 4, 'placeholder' => 'Décrivez l\'événement...'],
            ])
            ->add('state', EnumType::class, [ // Use EnumType
                'class' => GouvernoratEnum::class,
                'label' => 'Gouvernorat / Lieu',
                'choice_label' => fn (GouvernoratEnum $choice): string => $choice->label(), // Use the label method
                'placeholder' => 'Sélectionnez le lieu',
                'attr' => ['class' => 'form-select'],
                'required' => true, // Ensure lieu is required
            ])
            ->add('dateDebut', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date et Heure de Début',
                'html5' => true,
                'attr' => ['min' => (new \DateTime())->format('Y-m-d\TH:i')],
                'required' => true, // Ensure date is required
            ])
            ->add('dateFin', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date et Heure de Fin',
                'html5' => true,
                'attr' => ['min' => (new \DateTime())->format('Y-m-d\TH:i')], // Basic check, validation should enforce dateFin > dateDebut
                'required' => true, // Ensure date is required
            ])
            ->add('trottinetteMinAutonomie', IntegerType::class, [ // Use IntegerType
                'label' => 'Autonomie Minimale Requise (km)',
                'required' => false,
                'attr' => ['placeholder' => 'Ex: 15', 'min' => 0],
                'help' => 'Laissez vide si non applicable.',
            ]);

        // Status field only for Admin edit form
            $builder->add('statut', ChoiceType::class, [
                'label' => 'Statut Événement',
                'choices' => [ // Translate labels
                    'À Venir' => 'A_VENIR',
                    'placeholder' => false,             // no “-- choose --” blank

                    'En Cours' => 'EN_COURS',
                    'Terminé' => 'TERMINE',
                    'Annulé' => 'ANNULE',
                ],
                'attr' => ['class' => 'form-select'],
                'placeholder' => 'Choisir un statut',
            ]);
        }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
            'is_admin_edit' => false, // Custom option
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}