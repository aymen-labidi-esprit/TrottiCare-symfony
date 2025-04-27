<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Participation;
use App\Entity\Utilisateur;
use App\Enum\ParticipationStatus;
use App\Repository\EventRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicEventController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->redirectToRoute('app_public_events');
    }

    #[Route('/events', name: 'app_public_events')]
    public function events(EventRepository $eventRepository): Response
    {
        $upcomingEvents = $eventRepository->findUpcomingEvents();
        $allEvents = $eventRepository->findAll();
        
        return $this->render('public/events.html.twig', [
            'upcomingEvents' => $upcomingEvents,
            'allEvents' => $allEvents,
        ]);
    }

    #[Route('/events/{id}', name: 'app_public_event_show')]
    public function show(Event $event): Response
    {
        return $this->render('public/event_show.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/events/{id}/participate', name: 'app_public_event_participate', methods: ['POST'])]
    public function participate(Request $request, Event $event, EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            // Look for an existing test user
            $user = $utilisateurRepository->findByEmail('test@example.com');
            
            if (!$user) {
                // Create a default test user for participation testing
                $user = new Utilisateur();
                $user->setEmail('test@example.com');
                $user->setNom('Test');
                $user->setPrenom('User');
                $user->setPassword('test123');
                $user->setRole('client');
                $user->setTelephone('0123456789');
                $entityManager->persist($user);
                $entityManager->flush();
            }
        }

        // Check if user already registered
        foreach ($event->getParticipations() as $participation) {
            if ($participation->getUtilisateur() === $user && 
                $participation->getStatut() === ParticipationStatus::INSCRIT) {
                $this->addFlash('error', 'You are already registered for this event!');
                return $this->redirectToRoute('app_public_event_show', ['id' => $event->getId()]);
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
        return $this->redirectToRoute('app_public_event_show', ['id' => $event->getId()]);
    }
}
