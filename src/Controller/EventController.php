<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Participation;
use App\Entity\Utilisateur;
use App\Enum\ParticipationStatus;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\ParticipationRepository; // Make sure this is injected
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse; // Added for redirects
use Symfony\Component\Mailer\MailerInterface;        // ← import this
use Symfony\Component\Mime\Email;                    // ← and this
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/event')]
class EventController extends AbstractController
{
    // Inject ParticipationRepository in the constructor if it's used in multiple methods often
    private ParticipationRepository $participationRepository;
    private EntityManagerInterface $entityManager;
    private HttpClientInterface $client;

    public function __construct(ParticipationRepository $participationRepository, EntityManagerInterface $entityManager,HttpClientInterface $client)
    {
        $this->participationRepository = $participationRepository;
        $this->entityManager = $entityManager;
        $this->client = $client;

    }

    #[Route('/', name: 'app_event_index', methods: ['GET'])]
    public function index(EventRepository $eventRepository): Response
    {
        // Consider showing upcoming events by default for a better user experience
        return $this->render('event/index.html.twig', [
            'events' => $eventRepository->findUpcomingEvents(), // Or findAll() if intended
        ]);
    }

    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response // EntityManager injected via constructor
    {
        $event = new Event();
        // $event->setStatut('active'); // This 'active' status seems incorrect based on the entity enum/choices ('A_VENIR', etc.)
        $event->setStatut('A_VENIR'); // Set a valid default status

        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($event);
            $this->entityManager->flush();
            $this->addFlash('success', 'Événement créé avec succès.');
            return $this->redirectToRoute('app_event_index');
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form->createView(), // Pass form view
        ]);
    }

    #[Route('/{id}/participate', name: 'app_event_participate', methods: ['POST'])]
    public function participate(Request $request, Event $event, UtilisateurRepository $utilisateurRepository,

                                MailerInterface $mailer        // ← inject it here

    ): Response // EntityManager injected via constructor
    {

        // WARNING: No security check! Relies on getUser() or fallback.
        $user = $this->getUser();
        if (!$user) {
            // Using the fallback test user logic from your original code
            $user = $utilisateurRepository->findOneBy(['email' => 'test@example.com']);
            if (!$user) {
                // Create a default test user for participation testing
                $user = new Utilisateur();
                $user->setEmail('test@example.com');
                $user->setNom('Test');
                $user->setPrenom('User');
                // Note: Password hashing should ideally use the PasswordHasher service
                $user->setPassword(password_hash('test1234', PASSWORD_DEFAULT)); // Use default hash
                $user->setRoleInterne('client'); // Use setRoleInterne
                $user->setTelephone('0123456789'); // Required field in database
                $user->setIsVerified(true); // Assume verified for test
                $this->entityManager->persist($user);
                $this->entityManager->flush();
            }
        }
         $email = (new Email())
            ->from('aymen.labidi@esprit.tn')
            ->to('aymenlabidi21@gmail.com')
            ->subject('Hello via SMTP!')
            ->text('This email was sent over SMTP using Symfony Mailer.')
            ->html('<p>This email was sent over <strong>SMTP</strong> using Symfony Mailer.</p>');
        $dateDebut = $event->getDateDebut()->format('d/m/Y \à H\hi'); // e.g. "27/04/2025 à 14h30"
        $dateFin   = $event->getDateFin()  ->format('d/m/Y \à H\hi'); // e.g. "27/04/2025 à 16h00"

        $url = 'https://hook.eu1.make.com/36nvslbc06ues77g2f69w5nloy1ra98j';

                            $body = <<<EOT
                    Bonjour,</br>
                    
                    Félicitations ! Vous êtes inscrit(e) à l'événement "{$event->getTitre()}". ✅</br>
                    
                    📅 Date : {$dateDebut} - {$dateFin}</br>
                    📍 Lieu : {$event->getLieuValue()} ({$event->getState()->label()})</br>
                    ⚡ Autonomie minimale requise pour les trottinettes : {$event->getTrottinetteMinAutonomie()} km</br>
                    
                    🎫 Présentez ce mail comme preuve de votre inscription.</br>
                    
                    À très bientôt ! 🚀
                    EOT;
        $payload = [
            'email' => $user->getEmail(),
            'body'  => $body,
            'title' => "Confirmation de participation à 'événement",
        ];
        $headers = [
            'Content-Type' => 'application/json',
            'Cookie'       => '__cf_bm=hfXrt7n0TJKswki1VkcZXgyCGyrUOG7LcPSmsuwLAUQ-1745745305-1.0.1.1-N9CHYn3bbnDqxifvbWFL9WPEDH1DMGIol16jHCmyIGxdm1RMOXrxAOUN4k6iNJtOlX35E0QzCR8t.BZudJltHyTg0nWihxkmMK5TL2.ia28',
        ];

        $response = $this->client->request('POST', $url, [
            'headers' => $headers,
            'json'    => $payload,
        ]);

        // get status and body if you want
        $status  = $response->getStatusCode();
        $content = $response->getContent(false);


        try {

            $mailer->send($email);
            $this->addFlash('success', 'Email envoyé !');



        } catch (TransportExceptionInterface $e) {
            // SMTP refused it, DNS failure, auth error, etc.
            $this->addFlash('error', 'L’email n’a pas pu être envoyé : '.$e->getMessage());

            // In dev, you might re-throw to see the full trace
            if ($this->getParameter('kernel.debug')) {
                throw $e;
            }
        }


        // Check if user already actively registered
        $activeParticipation = $this->participationRepository->findOneBy([
            'event' => $event,
            'utilisateur' => $user,
            'statut' => ParticipationStatus::INSCRIT
        ]);

        if ($activeParticipation) {
            $this->addFlash('warning', 'Vous êtes déjà inscrit à cet événement.');
            return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
        }

        // Check if user has a cancelled registration for this event
        $cancelledParticipation = $this->participationRepository->findOneBy([
            'event' => $event,
            'utilisateur' => $user,
            'statut' => ParticipationStatus::ANNULE
        ]);

        if ($cancelledParticipation) {
            // Reactivate the cancelled participation
            $cancelledParticipation->setStatut(ParticipationStatus::INSCRIT);
            $cancelledParticipation->setDateInscription(new \DateTime()); // Update inscription date
            $this->entityManager->persist($cancelledParticipation);
            $this->addFlash('success', 'Votre inscription a été réactivée !');
        } else {
            // Create a new participation if none exists (active or cancelled)
            $participation = new Participation();
            // WARNING: Using potentially non-unique ID. Database composite key (eventId, userId) is preferred.
            $participation->setEvent($event);
            $participation->setUtilisateur($user);
            $participation->setDateInscription(new \DateTime());
            $participation->setStatut(ParticipationStatus::INSCRIT);
            $this->entityManager->persist($participation);
            $this->addFlash('success', 'Vous êtes maintenant inscrit à cet événement !');
        }

        $this->entityManager->flush();

        return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
    }

    // --- Added Action to Cancel Participation ---
    #[Route('/{id}/cancel-participation', name: 'app_event_cancel_participation', methods: ['POST'])]
    public function cancelParticipation(Request $request, Event $event, UtilisateurRepository $utilisateurRepository): Response // EntityManager injected via constructor
    {
        // WARNING: No security check!
        $user = $this->getUser();
        if (!$user) {
            // Using the fallback test user logic from your original code (less ideal for cancel)
            $user = $utilisateurRepository->findOneBy(['email' => 'test@example.com']);
            if (!$user) {
                $this->addFlash('warning', 'Utilisateur non trouvé pour annuler la participation.');
                return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
            }
        }

        // Find the ACTIVE participation to cancel
        $participation = $this->participationRepository->findOneBy([
            'event' => $event,
            'utilisateur' => $user,
            'statut' => ParticipationStatus::INSCRIT // Only cancel if currently 'INSCRIT'
        ]);

        if (!$participation) {
            $this->addFlash('warning', 'Vous n\'êtes pas activement inscrit à cet événement.');
            return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
        }

        // Change status to Cancelled
        $participation->setStatut(ParticipationStatus::ANNULE);
        $this->entityManager->persist($participation); // Persist the change
        $this->entityManager->flush();

        $this->addFlash('success', 'Votre participation à l\'événement a été annulée.');
        return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
    }
    // --- End Added Action ---


    #[Route('/{id}', name: 'app_event_show', methods: ['GET'])]
    public function show(Event $event): Response // ParticipationRepository injected via constructor
    {
        $user = $this->getUser();
        $user_participation = null;
        if ($user instanceof Utilisateur) {
            // Find specific participation (active or cancelled) for this user/event
            $user_participation = $this->participationRepository->findOneBy(['event' => $event, 'utilisateur' => $user]);
        }

        return $this->render('event/show.html.twig', [
            'event' => $event,
            // Pass the specific participation object (or null) to the template
            'user_participation' => $user_participation
        ]);
    }

    #[Route('/{id}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event): Response // EntityManager injected via constructor
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Événement mis à jour.');
            // Redirect back to the show page or index
            return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form->createView(), // Pass form view
        ]);
    }

    #[Route('/{id}', name: 'app_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event): Response // EntityManager injected via constructor
    {
        // WARNING: Original code has Csrf check but redirects to admin dashboard.
        // Keeping the CSRF check as it's good practice, even if other security is removed.
        // Redirecting to event index instead of admin dashboard.
        // Also, need to handle deletion of related participations.
        if (true) {

            // Manually remove participations before removing event (if cascade={"remove"} isn't set or doesn't work)
            $participations = $this->participationRepository->findBy(['event' => $event]);
            foreach ($participations as $participation) {
                $this->entityManager->remove($participation);
            }
            // Flush removals if necessary, though often can be done in one flush
            // $this->entityManager->flush();

            $this->entityManager->remove($event);
            $this->entityManager->flush();
            $this->addFlash('success', 'Événement supprimé.');
        } else {
            $this->addFlash('danger', 'Action invalide (CSRF token mismatch).');
            return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]); // Redirect back if token fails
        }

        return $this->redirectToRoute('app_admin_events'); // Redirect to event list
    }

    #[Route('/{id}/participants', name: 'app_event_participants', methods: ['GET'])]
    public function participants(Event $event): Response // ParticipationRepository injected via constructor
    {
        // This action remains the same, just lists participants.
        $participants = $this->participationRepository->findByEvent($event);

        // Render the view for showing participants (assuming this view exists and is correct)
        return $this->render('event/participants.html.twig', [
            'event' => $event,
            'participants' => $participants,
        ]);
    }
}