<?php
// src/Form/ReservationType.php
namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Trottinette;
use App\Enum\Paiement;
use App\Enum\ReservationStatus;
use App\Repository\TrottinetteRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class ReservationType extends AbstractType
{
    private Security $security;
    private TrottinetteRepository $trottinetteRepository;

    public function __construct(Security $security, TrottinetteRepository $trottinetteRepository)
    {
        $this->security = $security;
        $this->trottinetteRepository = $trottinetteRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('trottinette', EntityType::class, [
                'class' => Trottinette::class,
                'choice_label' => fn(Trottinette $t) => sprintf(
                    '%s (%s - %s%%)',
                    $t->getModele(),
                    $t->getNumeroSerie(),
                    $t->getBatterie() ?? 'N/A'
                ),
                'label' => 'Trottinette à Réserver',
                'placeholder' => 'Sélectionnez une trottinette disponible',
                'attr' => ['class' => 'form-select'],
                'query_builder' => function (TrottinetteRepository $tr) {
                    return $tr->createQueryBuilder('t')
                        ->where('t.etat = :status')
                        ->setParameter('status', \App\Enum\TrottinetteStatus::DISPONIBLE)
                        ->orderBy('t.modele', 'ASC');
                },
                'group_by' => function(Trottinette $choice, $key, $value) {
                    return $choice->getPointRelais()?->getNom() ?? 'Sans Point Relais';
                },
            ])
            ->add('dateDebut', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Début de la Réservation',
                'html5' => true,
                'attr' => ['min' => (new \DateTime('+5 minutes'))->format('Y-m-d\TH:i')],
            ])
            ->add('dateFin', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Fin de la Réservation',
                'html5' => true,
                'attr' => ['min' => (new \DateTime('+10 minutes'))->format('Y-m-d\TH:i')],
            ])
            ->add('montant', MoneyType::class, [
                'label' => 'Montant Estimé',
                'currency' => 'EUR', // Change to TND if needed
                'divisor' => 100,
                'required' => false,
                'attr' => [ 'placeholder' => '0.00' ],
                'help' => 'Le montant sera calculé précisément plus tard.',
            ])
            ->add('paiement', EnumType::class, [
                'class' => Paiement::class,
                'choice_label' => fn (Paiement $choice): string => $choice->label(),
                'label' => 'Méthode de Paiement',
                'placeholder' => 'Sélectionnez un paiement',
                'attr' => ['class' => 'form-select'],
            ])
            ->add('status', EnumType::class, [
                'class' => ReservationStatus::class, // Ensure it's pointing to your enum class
                'choice_label' => fn (ReservationStatus $status): string => $status->label(), // assuming label() method is defined in enum
                'label' => 'Statut Réservation',
                'placeholder' => 'Sélectionnez un statut',
                'attr' => ['class' => 'form-select'],
            ]);
    

        if ($options['is_admin_edit'] ?? false) {
            $builder->add('status', EnumType::class, [
                'class' => ReservationStatus::class,
                'choice_label' => fn (ReservationStatus $choice): string => $choice->label(),
                'label' => 'Statut Réservation',
                'attr' => ['class' => 'form-select'],
                'placeholder' => 'Sélectionnez un statut',
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'is_admin_edit' => false,
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}