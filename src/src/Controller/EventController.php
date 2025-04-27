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
use Knp\Component\Pager\PaginatorInterface;

#[Route('/event')]
class EventController extends AbstractController
{
    #[Route('/public', name: 'app_event_list', methods: ['GET'])]
    public function publicList(Request $request, EventRepository $eventRepository): Response
    {
        $statut = $request->query->get('statut');
        $lieu = $request->query->get('lieu');

        $qb = $eventRepository->createQueryBuilder('e');

        if ($statut) {
            $qb->andWhere('e.statut = :statut')->setParameter('statut', $statut);
        }

        if ($lieu) {
            $qb->andWhere('e.lieu LIKE :lieu')->setParameter('lieu', '%' . $lieu . '%');
        }

        $events = $qb->getQuery()->getResult();

        return $this->render('event/public_list.html.twig', [
            'events' => $events,
            'currentStatut' => $statut,
            'currentLieu' => $lieu,
        ]);
    }

    // ✅ Liste des événements paginée
    #[Route('/', name: 'app_event_index', methods: ['GET'])]
    public function index(Request $request, EventRepository $eventRepository, PaginatorInterface $paginator): Response
    {
        $query = $eventRepository->createQueryBuilder('e')
            ->orderBy('e.dateDebut', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            5 // ← nombre d'événements par page
        );

        return $this->render('event/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $event->setState('active');

        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($event);
            $entityManager->flush();

            $this->addFlash('success', 'Événement créé avec succès.');
            return $this->redirectToRoute('app_event_index');
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/participate', name: 'app_event_participate', methods: ['POST'])]
    public function participate(
        Request $request,
        Event $event,
        EntityManagerInterface $entityManager,
        UtilisateurRepository $utilisateurRepository
    ): Response {
        $user = $this->getUser();

        if (!$user instanceof Utilisateur) {
            $user = $utilisateurRepository->findOneBy(['email' => 'test@example.com']) ?? new Utilisateur();
            $user->setEmail('test@example.com');
            $user->setNom('Test');
            $user->setPrenom('User');
            $user->setPassword('test123');
            $user->setRole('client');
            $user->setTelephone('0123456789');
            $entityManager->persist($user);
            $entityManager->flush();
        }

        foreach ($event->getParticipations() as $p) {
            if ($p->getUtilisateur() === $user && $p->getStatut() === ParticipationStatus::INSCRIT) {
                $this->addFlash('error', 'Vous êtes déjà inscrit à cet événement.');
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

        $this->addFlash('success', 'Inscription réussie à l’événement !');
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
            $this->addFlash('success', 'Événement mis à jour avec succès.');
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
        if ($this->isCsrfTokenValid('delete_event_' . $event->getId(), $request->request->get('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
            $this->addFlash('success', 'Événement supprimé.');
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('app_event_index');
    }

    #[Route('/{id}/participants', name: 'app_event_participants', methods: ['GET'])]
    public function participants(
        Request $request,
        Event $event,
        ParticipationRepository $participationRepository,
        PaginatorInterface $paginator
    ): Response {
        $query = $participationRepository->createQueryBuilder('p')
            ->andWhere('p.event = :event')
            ->setParameter('event', $event)
            ->orderBy('p.dateInscription', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('event/participants.html.twig', [
            'event' => $event,
            'pagination' => $pagination,
        ]);
    }

    #[Route('/{id}/cancel', name: 'app_event_cancel', methods: ['POST'])]
    public function cancel(
        Request $request,
        Event $event,
        EntityManagerInterface $entityManager,
        UtilisateurRepository $utilisateurRepository,
        ParticipationRepository $participationRepository
    ): Response {
        $user = $this->getUser();
        if (!$user instanceof Utilisateur) {
            $user = $utilisateurRepository->findOneBy(['email' => 'test@example.com']);
        }

        if (!$user) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
        }

        $participation = $participationRepository->findOneBy([
            'event' => $event,
            'utilisateur' => $user,
            'statut' => ParticipationStatus::INSCRIT,
        ]);

        if (!$participation) {
            $this->addFlash('error', 'Aucune participation active trouvée.');
        } else {
            $entityManager->remove($participation);
            $entityManager->flush();
            $this->addFlash('success', 'Votre participation a été annulée.');
        }

        return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
    }
}
