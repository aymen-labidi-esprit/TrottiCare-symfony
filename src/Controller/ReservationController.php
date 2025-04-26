<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ReservationRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Symfony\Component\Security\Core\Security;



#[Route('/admin/reservations')]
final class ReservationController extends AbstractController
{

    private Security $security;
    private EntityManagerInterface $entityManager;

    public function __construct(Security $security, EntityManagerInterface $entityManager)
    {
        $this->security = $security;
        $this->entityManager = $entityManager;
    }

    
    #[Route('/', name: 'reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }
    #[Route('/new', name: 'reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        // Crée une nouvelle réservation
        $reservation = new Reservation();

        // Récupérer l'utilisateur authentifié
        $utilisateur = $this->security->getUser();
        if ($utilisateur) {
            // Associer l'utilisateur à la réservation
            $reservation->setUtilisateur($utilisateur);
        }

        // Créer le formulaire pour la réservation
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarder la réservation dans la base de données
            $this->entityManager->persist($reservation);
            $this->entityManager->flush();

            // Ajouter un message flash de succès
            $this->addFlash('success', 'Réservation effectuée avec succès.');

            // Rediriger l'utilisateur vers une autre page après la soumission du formulaire
            return $this->redirectToRoute('reservation_index'); // Ajustez le chemin de redirection
        }

        // Afficher le formulaire
        return $this->render('reservation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

#[Route('/{id}', name: 'reservation_show', methods: ['GET'])]
public function show(Reservation $reservation): Response
{
    return $this->render('reservation/show.html.twig', [
        'reservation' => $reservation,
    ]);
}

#[Route('/{id}/edit', name: 'reservation_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Reservation $reservation, EntityManagerInterface $em): Response
{
    $form = $this->createForm(ReservationType::class, $reservation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->flush();

        $this->addFlash('success', 'Réservation mise à jour.');
        return $this->redirectToRoute('reservation_index');
    }

    return $this->render('reservation/edit.html.twig', [
        'reservation' => $reservation,
        'form' => $form->createView(),
    ]);
}

#[Route('/{id}', name: 'reservation_delete', methods: ['POST'])]
public function delete(Request $request, Reservation $reservation, EntityManagerInterface $em): Response
{
    if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
        $em->remove($reservation);
        $em->flush();

        $this->addFlash('success', 'Réservation supprimée.');
    }

    return $this->redirectToRoute('reservation_index');
}

}
