<?php

namespace App\Controller\Client;

use App\Entity\Reservation;
use App\Entity\Trottinette;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ReservationController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private ReservationRepository $reservationRepository;
    private Security $security;

    public function __construct(EntityManagerInterface $entityManager, ReservationRepository $reservationRepository, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->reservationRepository = $reservationRepository;
        $this->security = $security;
    }

    #[Route('/reservation/create/{trottinette_id}', name: 'reservation_create', methods: ['POST'])]
    public function create(Request $request, int $trottinette_id): Response
    {
        // Retrieve the trottinette
        $trottinette = $this->entityManager->getRepository(Trottinette::class)->find($trottinette_id);

        // Check if the trottinette exists
        if (!$trottinette) {
            $this->addFlash('danger', 'Cette trottinette n\'existe pas.');
            return $this->redirectToRoute('trottinette_list'); // Change this to your trottinette list route
        }

        // Check if the trottinette is already reserved
        $existingReservation = $this->reservationRepository->findOneBy(['trottinette' => $trottinette]);
        if ($existingReservation) {
            $this->addFlash('danger', 'Cette trottinette est déjà réservée.');
            return $this->redirectToRoute('trottinette_list'); // Redirect to the list or another appropriate page
        }

        // Create new reservation
        $reservation = new Reservation();
        $reservation->setTrottinette($trottinette);
        $reservation->setUtilisateur($this->security->getUser());
        $reservation->setDateDebut(new \DateTime()); // Set current time or based on user input
        $reservation->setDateFin(new \DateTime('+1 hour')); // Example, set 1 hour duration
        $reservation->setMontant('10.00'); // Set a default amount or calculate dynamically
        $reservation->setStatus(ReservationStatus::PENDING); // Default status
        $reservation->setPaiement(Paiement::CASH); // Example payment method

        // Persist and flush the reservation
        $this->entityManager->persist($reservation);
        $this->entityManager->flush();

        // Add a success flash message
        $this->addFlash('success', 'Réservation effectuée avec succès.');

        // Redirect to the reservation list or another page
        return $this->redirectToRoute('reservation_index');
    }
}
