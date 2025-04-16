<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Participation;
use App\Entity\Utilisateur;
use App\Enum\ParticipationStatus;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\ParticipationRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/event')]
class EventController extends AbstractController
{
    #[Route('/', name: 'app_event_index', methods: ['GET'])]
    public function index(EventRepository $eventRepository): Response
    {
        return $this->render('event/index.html.twig', [
            'events' => $eventRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        // Initialize required state field
        $event->setState('active');
        
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_public_events');
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/participate', name: 'app_event_participate', methods: ['POST'])]
    public function participate(Request $request, Event $event, EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $user = $utilisateurRepository->findByEmail('test@example.com');
            if (!$user) {
                // Create a default test user for participation testing
                $user = new Utilisateur();
                $user->setEmail('test@example.com');
                $user->setNom('Test');
                $user->setPrenom('User');
                $user->setPassword('test123'); // This will set both password hash and salt
                $user->setRole('client');
                $user->setTelephone('0123456789'); // Required field in database
                $entityManager->persist($user);
                $entityManager->flush();
            }
        }

        // Check if user already registered
        foreach ($event->getParticipations() as $participation) {
            if ($participation->getUtilisateur() === $user && $participation->getStatut() === ParticipationStatus::INSCRIT) {
                $this->addFlash('error', 'You are already registered for this event!');
                return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
            }
        }

        $participation = new Participation();
        $participation->setId(uniqid());
        $participation->setEvent($event);
        $participation->setUtilisateur($user);
        $participation->setDateInscription(new \DateTime());
        $participation->setStatut(ParticipationStatus::INSCRIT);
        $entityManager->persist($participation);
        $entityManager->flush();

        $this->addFlash('success', 'You have successfully registered for this event!');
        return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
    }

    #[Route('/{id}', name: 'app_event_show', methods: ['GET'])]
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_event_index');
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete_event_'.$event->getId(), $request->request->get('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }

    #[Route('/{id}/participants', name: 'app_event_participants', methods: ['GET'])]
    public function participants(Event $event, ParticipationRepository $participationRepository): Response
    {
        $participants = $participationRepository->findByEvent($event);
        
        return $this->render('event/participants.html.twig', [
            'event' => $event,
            'participants' => $participants,
        ]);
    }
}