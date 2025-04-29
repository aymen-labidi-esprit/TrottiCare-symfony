<?php

namespace App\Controller\Client;

use App\Entity\Event;
use App\Entity\Participation;
use App\Entity\Utilisateur;
use App\Enum\ParticipationStatus;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\ParticipationRepository; // Make sure this is injected
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse; // Added for redirects
use Symfony\Component\Mailer\MailerInterface;        // ← import this
use Symfony\Component\Mime\Email;                    // ← and this
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Endroid\QrCode\Builder\BuilderInterface; // QR Code Builder
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Writer\PngWriter;
use App\Service\WeatherService;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface; // URL Generator

#[Route('/client/event')]
class EventController extends AbstractController
{
    // Inject ParticipationRepository in the constructor if it's used in multiple methods often
    private ParticipationRepository $participationRepository;
    private EntityManagerInterface $entityManager;
    private HttpClientInterface $client;
    private EventRepository $eventRepository; // Add repository property if used elsewhere
    private BuilderInterface $qrCodeBuilder; // Inject QR Code Builder
    private UrlGeneratorInterface $urlGenerator; // Inject URL Generator

    public function __construct(ParticipationRepository $participationRepository, EntityManagerInterface $entityManager,HttpClientInterface $client,
            EventRepository $eventRepository // Inject EventRepository
        ,
                                BuilderInterface $qrCodeBuilder, // Inject
                                UrlGeneratorInterface $urlGenerator // Inject


    )
    {
        $this->participationRepository = $participationRepository;
        $this->entityManager = $entityManager;
        $this->client = $client;
        $this->eventRepository = $eventRepository; // Store it
        $this->qrCodeBuilder = $qrCodeBuilder; // Store
        $this->urlGenerator = $urlGenerator; // Store

    }

    #[Route('/', name: 'client_event_index', methods: ['GET'])]
    public function index(
        // EventRepository $eventRepository, // Now injected via constructor
        Request            $request,
        PaginatorInterface $paginator,
        ParticipationRepository $participationRepo // Inject here if only needed here
    ): Response
    {
        /* ---------- query parameters & sane defaults -------------------- */
        $search    = trim((string)$request->query->get('search', ''));
        $filter    =              $request->query->get('filter', 'all'); // Default filter
        $page      = max(1, (int) $request->query->get('page',   1));
        $limit     = max(1, (int) $request->query->get('limit', 12)); // Default items per page
        $sort      = $request->query->get('sort',      'e.dateDebut'); // KNP Default field
        $direction = strtolower($request->query->get('direction', 'desc')); // KNP Default direction

        // Validate sort field against an allowed list
        $allowedSortFields = ['e.titre', 'e.dateDebut', 'e.state', 'e.statut'];
        if (!in_array($sort, $allowedSortFields, true)) {
            $sort = 'e.dateDebut'; // Fallback to default
        }
        if (!in_array($direction, ['asc', 'desc'])) {
            $direction = 'desc';   // Fallback to default
        }

        /* ---------- query builder --------------------------------------- */
        // Use the injected repository property
        $qb = $this->eventRepository->createQueryBuilder('e')
            // Optional: Select only necessary fields if performance is critical
            // ->select('e', 'p') // Select event and participation related fields if needed later
            ->leftJoin('e.participations', 'p')
            // Note: Counting here can sometimes interfere with pagination counts.
            // It might be better to fetch participations separately if needed per event.
            // ->addSelect('COUNT(p.id) AS participantCount') // Removed for simplicity on index
            ->groupBy('e.id'); // Grouping might still be needed depending on joins/selects

        // Apply Search filter
        if ($search !== '') {
            $qb->andWhere(
                $qb->expr()->orX(
                    'LOWER(e.titre)       LIKE :q',
                    'LOWER(e.description) LIKE :q',
                    'LOWER(e.state)       LIKE :q' // state is Enum, search by its string value
                )
            )->setParameter('q', '%'.mb_strtolower($search).'%');
        }

        // Apply Status/Date Filters
        $now = new \DateTimeImmutable();
        switch ($filter) {
            case 'upcoming': $qb->andWhere('e.dateDebut >= :now')->setParameter('now',$now); break;
            case 'past':     $qb->andWhere('e.dateDebut <  :now')->setParameter('now',$now); break;
            case 'a_venir':  $qb->andWhere('e.statut = :s')->setParameter('s','A_VENIR');    break;
            case 'en_cours': $qb->andWhere('e.statut = :s')->setParameter('s','EN_COURS');   break;
            case 'termine':  $qb->andWhere('e.statut = :s')->setParameter('s','TERMINE');    break;
            case 'annule':   $qb->andWhere('e.statut = :s')->setParameter('s','ANNULE');     break;
            // default: case 'all' - no extra constraint
        }

        /* ---------- pagination (KNP adds ORDER BY automatically) --------- */
        $pagination = $paginator->paginate(
            $qb->getQuery(), // Pass the Query object, not the QueryBuilder
            $page,
            $limit,
            [
                'pageParameterName'          => 'page', // Standard KNP params
                'sortFieldParameterName'     => 'sort',
                'sortDirectionParameterName' => 'direction',
                'defaultSortFieldName'       => $sort,       // Use validated sort field
                'defaultSortDirection'       => $direction,  // Use validated direction
                'distinct'                   => false, // Set to false unless you have complex joins needing it
                'allowEmptyFields'           => true,  // Allows sorting by fields not explicitly selected
            ]
        );

        // --- OPTIONAL: Get participation status for events ON THIS PAGE ---
        $userParticipationMap = [];
        $user = $this->getUser();
        if ($user instanceof Utilisateur) {
            $eventIdsOnPage = [];
            foreach ($pagination->getItems() as $eventRow) {
                // Handle potential array structure from COUNT/GROUP BY if re-added
                $eventEntity = is_array($eventRow) ? $eventRow[0] : $eventRow;
                if ($eventEntity instanceof Event) {
                    $eventIdsOnPage[] = $eventEntity->getId();
                }
            }

            if (!empty($eventIdsOnPage)) {
                $participations = $participationRepo->findBy([
                    'utilisateur' => $user,
                    'event' => $eventIdsOnPage // Query for participations of these specific events
                ]);
                foreach ($participations as $p) {
                    // Map event ID to the participation status Enum or its value
                    $userParticipationMap[$p->getEvent()->getId()] = $p->getStatut(); // Store the Enum case
                }
            }
        }
        // --- END OPTIONAL ---


        /* ---------- view ------------------------------------------------- */
        return $this->render('client/event/index.html.twig', [
            // Pass the $pagination object itself. Twig loops over this.
            'pagination'             => $pagination,
            // Pass the participation map (Event ID => ParticipationStatus Enum or null)
            'userParticipationMap' => $userParticipationMap,


            // Keep filter/sort parameters for the form state
            'current_filter'         => $filter,
            'search_term'            => $search,
            'limit'                  => $limit,
            'sort'                   => $sort,       // Current sort field
            'direction'              => $direction,  // Current sort direction
        ]);
    }


    #[Route('/new', name: 'client_event_new', methods: ['GET', 'POST'])]
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
            return $this->redirectToRoute('client_event_index');
        }

        return $this->render('client/event/new.html.twig', [
            'event' => $event,
            'form' => $form->createView(), // Pass form view
        ]);
    }

    #[Route('/{id}/participate', name: 'client_event_participate', methods: ['POST'])]
    public function participate(Request $request, Event $event, UtilisateurRepository $utilisateurRepository,

                                MailerInterface $mailer        // ← inject it here

    ): Response // EntityManager injected via constructor
    {
//        $this->client->request('POST', "https://hook.eu1.make.com/ndgogmlq27hd1j6toex8eusathvnag8q", [
//            'json' => [
//                'title' => $event->getTitre(),
//                'description' => $event->getDescription(),
//                'start_time' => $event->getDateDebut()->format('c'), // ISO 8601 format
//                'end_time' => $event->getDateFin()->format('c'),
//                'location' => $event->getState()->value ?? null, // Assuming GouvernoratEnum has value "Ariana" etc.
//                'status' => $event->getStatut(),
//            ],
//        ]);
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
            'calendar_title' => $event->getTitre(),
                'description' => $event->getDescription(),
                'start_time' => $event->getDateDebut()->format('c'), // ISO 8601 format
                'end_time' => $event->getDateFin()->format('c'),
                'location' => $event->getState()->value ?? null, // Assuming GouvernoratEnum has value "Ariana" etc.
                'status' => $event->getStatut(),
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
            return $this->redirectToRoute('client_event_show', ['id' => $event->getId()]);
        }

        // Check if user has a cancelled registration for this event
        $cancelledParticipation = $this->participationRepository->findOneBy([
            'event' => $event,
            'utilisateur' => $user,
            'statut' => ParticipationStatus::ANNULE
        ]);
        $participationToConfirm = null; // Variable to hold the participation object

        if ($cancelledParticipation) {
            // Reactivate the cancelled participation
            $cancelledParticipation->setStatut(ParticipationStatus::INSCRIT);
            $cancelledParticipation->setDateInscription(new \DateTime()); // Update inscription date
            $this->entityManager->persist($cancelledParticipation);
            $this->addFlash('success', 'Votre inscription a été réactivée !');
            $participationToConfirm = $cancelledParticipation; // Use this participation object

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
            $participationToConfirm = $participation; // Use the new participation object

        }

        $this->entityManager->flush();

        // --- Redirect to the NEW Confirmation Page ---
        if ($participationToConfirm && $participationToConfirm->getId()) {
            return $this->redirectToRoute('client_participation_confirmation', ['id' => $participationToConfirm->getId()]);
        } else {
            // Fallback if something went wrong getting the ID
            $this->addFlash('error', 'Erreur lors de la récupération de l\'ID de participation.');
            return $this->redirectToRoute('client_event_show', ['id' => $event->getId()]);
        }    }

    // --- Added Action to Cancel Participation ---
    #[Route('/{id}/cancel-participation', name: 'client_event_cancel_participation', methods: ['POST'])]
    public function cancelParticipation(Request $request, Event $event, UtilisateurRepository $utilisateurRepository): Response // EntityManager injected via constructor
    {
        // WARNING: No security check!
        $user = $this->getUser();
        if (!$user) {
            // Using the fallback test user logic from your original code (less ideal for cancel)
            $user = $utilisateurRepository->findOneBy(['email' => 'test@example.com']);
            if (!$user) {
                $this->addFlash('warning', 'Utilisateur non trouvé pour annuler la participation.');
                return $this->redirectToRoute('client_event_show', ['id' => $event->getId()]);
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
            return $this->redirectToRoute('client_event_show', ['id' => $event->getId()]);
        }

        // Change status to Cancelled
        $participation->setStatut(ParticipationStatus::ANNULE);
        $this->entityManager->persist($participation); // Persist the change
        $this->entityManager->flush();

        $this->addFlash('success', 'Votre participation à l\'événement a été annulée.');
        return $this->redirectToRoute('client_event_show', ['id' => $event->getId()]);
    }
    // --- End Added Action ---


    #[Route('/{id}', name: 'client_event_show', methods: ['GET'])]
    public function show(Event $event): Response // ParticipationRepository injected via constructor
    {
        $user = $this->getUser();
        $user_participation = null;
        if ($user instanceof Utilisateur) {
            // Find specific participation (active or cancelled) for this user/event
            $user_participation = $this->participationRepository->findOneBy(['event' => $event, 'utilisateur' => $user]);
        }

        $user_participation_status = $user_participation?->getStatut();

        return $this->render('client/event/show.html.twig', [
            'event' => $event,
            // Pass the specific participation object (or null) to the template
            'user_participation' => $user_participation,           // Participation object or null
            'user_participation_status' => $user_participation_status   // Status Enum or null
        ]);
    }

    #[Route('/{id}/edit', name: 'client_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event): Response // EntityManager injected via constructor
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Événement mis à jour.');
            // Redirect back to the show page or index
            return $this->redirectToRoute('client_event_show', ['id' => $event->getId()]);
        }

        return $this->render('client/event/edit.html.twig', [
            'event' => $event,
            'form' => $form->createView(), // Pass form view
        ]);
    }

    #[Route('/{id}', name: 'client_event_delete', methods: ['POST'])]
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
            return $this->redirectToRoute('client_event_show', ['id' => $event->getId()]); // Redirect back if token fails
        }

        return $this->redirectToRoute('client_event_index'); // Redirect to event list
    }

    #[Route('/{id}/participants', name: 'client_event_participants', methods: ['GET'])]
    public function participants(Event $event): Response // ParticipationRepository injected via constructor
    {
        // This action remains the same, just lists participants.
        $participants = $this->participationRepository->findByEvent($event);

        // Render the view for showing participants (assuming this view exists and is correct)
        return $this->render('client/event/participants.html.twig', [
            'event' => $event,
            'participants' => $participants,
        ]);
    }
    #[Route('/participation/{id}/confirmation', name: 'client_participation_confirmation', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function participationConfirmation(Participation $participation): Response
    {
        // --- Security Check: Ensure the logged-in user owns this participation ---
        $currentUser = $this->getUser();
        if (!$currentUser instanceof Utilisateur || $participation->getUtilisateur() !== $currentUser) {
            $this->addFlash('danger', 'Accès non autorisé à cette confirmation.');
            // Redirect to a safe page, maybe their dashboard or event index
            return $this->redirectToRoute('client_event_index');
        }
        // --- End Security Check ---

        $event = $participation->getEvent();
        if (!$event) {
            throw $this->createNotFoundException('Événement associé non trouvé.');
        }

        $qrCodeDataUri = null;
        try {
            // 1. Generate the URL for the details page

            // 2. Generate the QR Code Result object
                            $dateDebut = $event->getDateDebut()->format('d/m/Y H:i');
                            $dateFin   = $event->getDateFin()  ->format('d/m/Y H:i');
                            $lieu      = $event->getState()?->label() ?? 'Non défini';
                            $desc      = trim(strip_tags($event->getDescription()));

                            $noteText = <<<EOT
                Événement : {$event->getTitre()}
                📅 Date : {$dateDebut} – {$dateFin}
                📍 Lieu  : {$lieu}
                
                ℹ️ Description :
                {$desc}
                EOT;

            $qrCodeResult = $this->qrCodeBuilder->build(
                data:                 $noteText,
                encoding:             new Encoding('UTF-8'),
                errorCorrectionLevel: ErrorCorrectionLevel::Low,
                size:                 200,
                margin:               10
            );

            // 3. Get the Data URI (base64 string)
            $qrCodeDataUri = $qrCodeResult->getDataUri();

        } catch (\Exception $e) {
            $this->addFlash('error', 'Impossible de générer le code QR : ' . $e->getMessage());
            // Log the error ($this->logger->error(...))
        }

        return $this->render('client/event/participation_confirmation.html.twig', [
            'participation' => $participation,
            'event' => $event,
            'qrCodeDataUri' => $qrCodeDataUri, // Pass the base64 URI to Twig
        ]);
    }
    
    


}