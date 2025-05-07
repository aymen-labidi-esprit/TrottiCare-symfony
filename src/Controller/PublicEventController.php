<?php
// src/Controller/PublicEventController.php
namespace App\Controller; // Adjust namespace if needed (e.g., App\Controller\Public)

use App\Entity\Event;
use App\Entity\Utilisateur;
use App\Enum\ParticipationStatus;
use App\Repository\EventRepository;
use App\Repository\ParticipationRepository; // Optional: If checking participation status
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // Or use Attribute if PHP 8+
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted; // For security attribute
use Knp\Snappy\Pdf; // Import Snappy's PDF service
use Endroid\QrCodeBundle\Response\QrCodeResponse; // Or use the generator interface
use Endroid\QrCode\Builder\BuilderInterface; // Use the Builder for more control
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Writer\PngWriter;

#[Route('/events')] // Base route for event actions
class PublicEventController extends AbstractController
{
    private LoggerInterface $logger;
    private EventRepository $eventRepository;
    private ParticipationRepository $participationRepository; // Optional
    // Inject BuilderInterface for QR codes and Pdf for Snappy
    private BuilderInterface $qrCodeBuilder;
    private Pdf $snappyPdf;

    public function __construct(
        LoggerInterface $logger,
        EventRepository $eventRepository,
        ParticipationRepository $participationRepository,
        BuilderInterface $qrCodeBuilder, // Inject QR Code Builder
        Pdf $snappyPdf // Inject Snappy PDF Service
    ) {
        $this->logger = $logger;
        $this->eventRepository = $eventRepository;
        $this->participationRepository = $participationRepository;
        $this->qrCodeBuilder = $qrCodeBuilder;
        $this->snappyPdf = $snappyPdf;
    }

    #[Route('', name: 'public_event_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $this->logger->info('Public event index page accessed.');

        // --- Filtering Logic (Example) ---
        $filter = $request->query->get('filter', 'all'); // 'all', 'upcoming', 'past'
        $search = $request->query->get('search', '');

        // ... (QueryBuilder logic remains the same) ...
        $queryBuilder = $this->eventRepository->createQueryBuilder('e')
            ->orderBy('e.dateDebut', 'DESC');

        if ($filter === 'upcoming') {
            $queryBuilder->andWhere('e.dateDebut >= :now')->setParameter('now', new \DateTimeImmutable());
        } elseif ($filter === 'past') {
            $queryBuilder->andWhere('e.dateDebut < :now')->setParameter('now', new \DateTimeImmutable());
        }

        if (!empty($search)) {
            $queryBuilder->andWhere(
                $queryBuilder->expr()->orX(
                    $queryBuilder->expr()->like('LOWER(e.titre)', ':search'),
                    $queryBuilder->expr()->like('LOWER(e.description)', ':search'),
                    // Assuming state holds GouvernoratEnum which stringifies to its value
                    $queryBuilder->expr()->like('LOWER(e.state)', ':search')
                )
            )->setParameter('search', '%' . mb_strtolower($search) . '%');
        }
        $events = $queryBuilder->getQuery()->getResult();
        // ...

        // --- Optional: Check participation status ---
        $userParticipations = [];
        // ... (participation check logic remains the same) ...

        // Prepare data for view
        $eventsForView = [];
        foreach($events as $event) {
            // ... (duration calculation and array creation remains the same) ...
            $duration = null;
            if ($event->getDateDebut() && $event->getDateFin()) {
                $diff = $event->getDateFin()->diff($event->getDateDebut());
                $duration = sprintf('%dh %02dmin', $diff->h + ($diff->days * 24), $diff->i);
            }
            $eventsForView[] = [
                'entity' => $event,
                'duration' => $duration,
                'user_participation_status' => $userParticipations[$event->getId()] ?? null
            ];
        }

        // --- **THE FIX IS HERE** ---
        // Ensure 'current_filter' is included in the context array passed to render
        return $this->render('public/event/index.html.twig', [
            'events_data' => $eventsForView,
            'current_filter' => $filter, // <-- PASS THE VARIABLE HERE
            'search_term' => $search,
        ]);
    }


    #[Route('/{id}', name: 'public_event_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(int $id): Response
    {
        $event = $this->eventRepository->find($id);
        if (!$event) {
            $this->logger->warning(sprintf('Event with ID %d not found.', $id));
            throw $this->createNotFoundException('L\'événement demandé n\'existe pas.');
        }
        $this->logger->info(sprintf('Showing details for event ID %d: "%s".', $id, $event->getTitre()));

        $duration = null;
        if ($event->getDateDebut() && $event->getDateFin()) {
            try {
                $diff = $event->getDateFin()->diff($event->getDateDebut());
                $duration = sprintf('%dh %02dmin', $diff->h + ($diff->days * 24), $diff->i);
            } catch (\Exception $e) {
                $this->logger->error(sprintf('Error calculating duration for event ID %d: %s', $id, $e->getMessage()));
            }
        }

        $userParticipationStatus = null;
        $participation = null; // Keep track of the participation entity if found
        $user = $this->getUser();
        if ($user instanceof Utilisateur) { // Use your specific User entity class
            $participation = $this->participationRepository->findOneByUserAndEvent($user,$event);
            $userParticipationStatus = $participation?->getStatut(); // Get the Enum object or null
            $this->logger->debug(sprintf('User %d participation status for event %d: %s', $user->getId(), $id, $userParticipationStatus?->value ?? 'null'));
        }

        return $this->render('public/event/show.html.twig', [
            'event' => $event,
            'duration' => $duration,
            'user_participation_status' => $userParticipationStatus, // Pass the Enum object or null
            'participation' => $participation // Pass the participation entity itself (needed for ticket ID)
        ]);
    }

    // --- NEW ACTION FOR DOWNLOADING TICKET ---
    #[Route('/{id}/ticket', name: 'public_event_download_ticket', methods: ['GET'])]
    #[IsGranted('ROLE_USER')] // Ensure user is logged in
    public function downloadTicket(Event $event): Response // Use ParamConverter for Event
    {
        $user = $this->getUser();
        if (!$user instanceof Utilisateur) {
            // Should not happen due to IsGranted, but good practice
            $this->logger->warning('Attempted ticket download without valid user.');
            throw $this->createAccessDeniedException('Vous devez être connecté pour télécharger un billet.');
        }

        // Find the specific *active* participation record
        $participation = $this->participationRepository->findOneBy([
            'event' => $event,
            'utilisateur' => $user,
            'statut' => ParticipationStatus::INSCRIT // Only allow download for INSCRIT status
        ]);

        if (!$participation) {
            $this->logger->warning(sprintf('User %d tried to download ticket for event %d without active participation.', $user->getId(), $event->getId()));
            throw $this->createNotFoundException('Participation non trouvée ou inactive pour cet événement.'); // Or AccessDenied
        }

        // --- Generate QR Code ---
        // Define the data for the QR code (make it unique and verifiable)
        $qrData = json_encode([
            'type' => 'event_ticket',
            'participation_id' => $participation->getId(),
            'event_id' => $event->getId(),
            'user_id' => $user->getId(),
            'timestamp' => time(), // Optional: add timestamp
        ]);

        try {

            $qrCodeResult = $this->qrCodeBuilder->build(
                writer: new PngWriter(),
                data: $qrData,
                encoding: new Encoding('UTF-8'),
                errorCorrectionLevel: ErrorCorrectionLevel::High,
                size: 150,
                // only needed if you want to override the writer configured
                // in your endroid_qr_code.yaml:
                margin: 10
            );

            // Build the result object



            // Get QR code as a base64 encoded data URI string to embed in HTML/Twig
            $qrCodeBase64 = $qrCodeResult->getDataUri();

        } catch (\Exception $e) {
            dd($e->getMessage());
            $this->logger->error('QR Code generation failed: ' . $e->getMessage());
            // Handle error appropriately - maybe show an error page or default PDF
            throw new \RuntimeException('Impossible de générer le code QR pour le billet.');
        }

        // --- Render HTML for PDF ---
        $html = $this->renderView('public/event/ticket_pdf.html.twig', [
            'event' => $event,
            'user' => $user,
            'participation' => $participation,
            'qrCodeBase64' => $qrCodeBase64, // Pass the base64 string
        ]);

        // --- Generate PDF using Snappy ---
        $filename = sprintf('billet-event-%d-user-%d.pdf', $event->getId(), $user->getId());

        try {
            return new Response(
                $this->snappyPdf->getOutputFromHtml($html),
                Response::HTTP_OK, // 200 status code
                [
                    'Content-Type'        => 'application/pdf',
                    // 'inline' displays in browser, 'attachment' forces download
                    'Content-Disposition' => sprintf('inline; filename="%s"', $filename),
                ]
            );
        } catch (\Exception $e) {
            dd($e);
            $this->logger->error('PDF generation failed: ' . $e->getMessage(), ['exception' => $e]);
            // Provide a user-friendly error response
            return new Response('Impossible de générer le billet PDF. Veuillez réessayer plus tard.', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    // --- Add Participation/Cancel Logic (Requires login, CSRF protection recommended) ---
    // #[Route('/{id}/participate', name: 'public_event_participate', methods: ['POST'])]
    // #[IsGranted('ROLE_USER')]
    // public function participate(...) { ... }

    // #[Route('/{id}/cancel-participation', name: 'public_event_cancel_participation', methods: ['POST'])]
    // #[IsGranted('ROLE_USER')]
    // public function cancelParticipation(...) { ... }
    // --- Add Participation/Cancel Logic (Requires login) ---
    // #[Route('/{id}/participate', name: 'public_event_participate', methods: ['POST'])]
    // #[IsGranted('ROLE_USER')] // Make sure users are logged in
    // public function participate(Request $request, Event $event, EntityManagerInterface $em): Response { ... }

    // #[Route('/{id}/cancel-participation', name: 'public_event_cancel_participation', methods: ['POST'])]
    // #[IsGranted('ROLE_USER')]
    // public function cancelParticipation(Request $request, Event $event, EntityManagerInterface $em): Response { ... }
}