<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ReservationRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Reservation;
use App\Form\ReservationFormType;

#[Route('/reservations')]
final class ReservationController extends AbstractController
{
    #[Route('/', name: 'reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'reservation_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $em): Response
{
    $reservation = new Reservation();
    $form = $this->createForm(ReservationFormType::class, $reservation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($reservation);
        $em->flush();
    
        $this->addFlash('success', 'Réservation créée avec succès.');
        return $this->redirectToRoute('reservation_index', [], Response::HTTP_SEE_OTHER);
    }
    
    if ($form->isSubmitted() && !$form->isValid()) {
        $this->addFlash('danger', 'Le formulaire contient des erreurs. Veuillez corriger les champs.');
    }
    

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
    $form = $this->createForm(ReservationFormType::class, $reservation);
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
