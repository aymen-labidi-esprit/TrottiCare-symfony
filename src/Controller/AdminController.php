<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin')]
    public function index(): Response
    {
        return $this->redirectToRoute('app_admin_dashboard');
    }

    #[Route('/dashboard', name: 'app_admin_dashboard')]
    public function dashboard(EventRepository $eventRepository): Response
    {
        $events = $eventRepository->findAll();
        
        $eventData = [];
        foreach ($events as $event) {
            $eventData[] = [
                'event' => $event,
                'participantCount' => $event->getParticipations()->count()
            ];
        }
        
        return $this->render('admin/dashboard.html.twig', [
            'eventData' => $eventData,
        ]);
    }
    
    #[Route('/events', name: 'app_admin_events')]
    public function events(EventRepository $eventRepository): Response
    {
        $events = $eventRepository->findAll();
        
        return $this->render('admin/events.html.twig', [
            'events' => $events,
        ]);
    }
    
    #[Route('/events/{id}/participants', name: 'app_admin_event_participants')]
    public function eventParticipants(Event $event): Response
    {
        return $this->render('admin/event_participants.html.twig', [
            'event' => $event
        ]);
    }
    
    #[Route('/events/new', name: 'app_admin_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $event->setState('Active');
        $event->setStatut('A_VENIR');
        
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($event);
            $entityManager->flush();

            $this->addFlash('success', 'Event created successfully!');
            return $this->redirectToRoute('app_admin_events');
        }

        return $this->render('admin/event_new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }
    
    #[Route('/events/{id}/edit', name: 'app_admin_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            
            $this->addFlash('success', 'Event updated successfully!');
            return $this->redirectToRoute('app_admin_events');
        }

        return $this->render('admin/event_edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }
    
    #[Route('/events/{id}', name: 'app_admin_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
            
            $this->addFlash('success', 'Event deleted successfully!');
        }

        return $this->redirectToRoute('app_admin_events');
    }
}
