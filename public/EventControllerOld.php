<?php
//
//namespace App\Controller\Admin;
//
//use App\Entity\Event;
//use App\Form\EventFilterType;
//use App\Form\EventType; // Needed for New/Edit actions
//use App\Repository\EventRepository;
//use App\Repository\ParticipationRepository; // Needed for Participants action
//use App\Enum\GouvernoratEnum; // Potentially needed for filters
//use Doctrine\ORM\EntityManagerInterface;
//use Psr\Log\LoggerInterface;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\Security\Http\Attribute\IsGranted;
//use Symfony\Component\HttpFoundation\JsonResponse;
//use Knp\Component\Pager\PaginatorInterface;
//
//#[IsGranted('ROLE_ADMIN')] // Secure the entire controller for Admins
//#[Route('/admin/events')] // Base route for admin event actions
//class EventControllerOdld extends AbstractController
//{
//    private LoggerInterface $logger;
//    private EntityManagerInterface $entityManager;
//    // Define limits for pagination selector
//    private const ALLOWED_LIMITS = [10, 20, 50, 100];
//    private const DEFAULT_LIMIT = 10; // Default items per page
//
//    // Inject necessary services
//    public function __construct(
//        LoggerInterface $logger,
//        EntityManagerInterface $entityManager
//    ) {
//        $this->logger = $logger;
//        $this->entityManager = $entityManager;
//    }
//
//    /**
//     * Lists all events with filtering, sorting, and pagination for Admins.
//     */
//// ---------------------------------------------------------------------
////  Lists events (search + filter + sort + pagination)
//// ---------------------------------------------------------------------
//
//    #[Route('/', name: 'app_admin_events', methods: ['GET'])]
//    public function index(
//        EventRepository $eventRepository, // Use specific repository
//        Request $request,
//        PaginatorInterface $paginator // Inject paginator here if not in repo constructor
//    ): Response {
//        $this->logger->info('Admin Event index accessed.');
//
//        $filterForm = $this->createForm(EventFilterType::class);
//        $filterForm->handleRequest($request);
//
//        $criteria = $filterForm->isSubmitted() && $filterForm->isValid()
//            ? $filterForm->getData()
//            : []; // Use data from filter form
//
//        // --- Pagination Limit Handling ---
//        $limit = $request->query->getInt('limit', self::DEFAULT_LIMIT);
//        if (!in_array($limit, self::ALLOWED_LIMITS)) {
//            $limit = self::DEFAULT_LIMIT;
//        }
//        // --- End Limit Handling ---
//
//        // Get sorting parameters from request (KNP Bundle convention)
//        $sortField = $request->query->get('sort', 'e.dateDebut'); // Default sort field
//        $sortDirection = $request->query->get('direction', 'desc'); // Default sort direction
//
//        // Validate sort field
//        $allowedSortFields = ['e.titre', 'e.dateDebut', 'e.state', 'e.statut', 'participantCount']; // Add 'participantCount' if you want to sort by it
//        if (!in_array($sortField, $allowedSortFields)) {
//            $sortField = 'e.dateDebut'; // Fallback
//        }
//        if (!in_array(strtolower($sortDirection), ['asc', 'desc'])) {
//            $sortDirection = 'desc'; // Fallback
//        }
//
//        // --- Call the new Repository Method ---
//        $pagination = $eventRepository->findFilteredPaginated(
//            $criteria,
//            $request->query->getInt('page', 1),
//            $limit,
//            $sortField,
//            $sortDirection
//        // Pass sorting params to repository if it needs them for default sort
//        );
//
//        // --- Fetch counts for dashboard cards ---
//        $countAVenir = $eventRepository->countByStatus('A_VENIR');
//        $countEnCours = $eventRepository->countByStatus('EN_COURS');
//        $countTermine = $eventRepository->countByStatus('TERMINE');
//        $countAnnule = $eventRepository->countByStatus('ANNULE');
//
//        $eventsWithCounts = [];
//        foreach ($pagination->getItems() as $event) {
//            /** @var Event $event */
//            $count = $this->participationRepository->countByEvent($event); // Assumes you have this method in ParticipationRepository
//            // OR $count = $event->getParticipations()->count(); // Lazy load
//
//            $eventsWithCounts[] = [
//                'event' => $event,
//                'participantCount' => $count
//            ];
//        }
//
//// ... Prepare other data for view (duration, location, user status) ...
//        $eventsForView = [];
//        foreach ($eventsWithCounts as $item) {
//            $event = $item['event'];
//            $duration = //... calculate duration ...
//            $eventsForView[] = [
//                'entity' => $event,
//                'duration' => $duration,
//                'location' => $event->getState()?->label() ?? '-',
//                'user_participation_status' => $userParticipationMap[$event->getId()] ?? null,
//                'participantCount' => $item['participantCount'] // Pass the count
//            ];
//        }
//
//        // --- Render View ---
//        return $this->render('admin/events.html.twig', [
//            'pagination' => $pagination,           // KNP Pagination object
//            'filterForm' => $filterForm->createView(), // Filter form view
//            'currentLimit' => $limit,                // Current limit for selector
//            'allowedLimits' => self::ALLOWED_LIMITS,   // Options for selector
//            'countAVenir' => $countAVenir,           // Counts for cards
//            'countEnCours' => $countEnCours,
//            'countTermine' => $countTermine,
//            'countAnnule' => $countAnnule,
//            // KNP sort parameters are automatically added to pagination URLs by the bundle
//            // No need to explicitly pass sort/direction here unless needed elsewhere in Twig
//        ]);
//    }
//
//    /**
//     * Displays a form to create a new Event entity.
//     */
//    #[Route('/new', name: 'app_admin_event_new', methods: ['GET', 'POST'])]
//    public function new(Request $request): Response
//    {
//        $event = new Event();
//        $event->setStatut('A_VENIR'); // Sensible default
//
//        // Tell the form it's NOT an admin edit to hide the status field
//        $form = $this->createForm(EventType::class, $event, ['is_admin_edit' => false]);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $this->entityManager->persist($event);
//            $this->entityManager->flush();
//
//            $this->addFlash('success', 'Événement créé avec succès.');
//            return $this->redirectToRoute('app_admin_events'); // Redirect to index
//        }
//
//        return $this->render('admin/event_form.html.twig', [ // Use a generic form template
//            'event' => $event,
//            'form' => $form->createView(),
//            'page_title' => 'Nouvel Événement',
//            'button_label' => 'Créer',
//        ]);
//    }
//
//    /**
//     * Displays a specific Event entity.
//     */
//    #[Route('/{id}', name: 'app_admin_event_show', methods: ['GET'])]
//    public function show(Event $event): Response
//    {
//        // You might want a dedicated admin show template or reuse a public one
//        return $this->render('admin/event_show.html.twig', [
//            'event' => $event,
//        ]);
//    }
//
//    /**
//     * Displays a form to edit an existing Event entity.
//     */
//    #[Route('/{id}/edit', name: 'app_admin_event_edit', methods: ['GET', 'POST'])]
//    public function edit(Request $request, Event $event): Response
//    {
//        // Tell the form it IS an admin edit to show the status field
//        $form = $this->createForm(EventType::class, $event, ['is_admin_edit' => true]);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $this->entityManager->flush();
//
//            $this->addFlash('success', 'Événement mis à jour avec succès.');
//            return $this->redirectToRoute('app_admin_events'); // Redirect to index
//        }
//
//        return $this->render('admin/event_form.html.twig', [ // Use a generic form template
//            'event' => $event,
//            'form' => $form->createView(),
//            'page_title' => 'Modifier l\'Événement',
//            'button_label' => 'Mettre à jour',
//        ]);
//    }
//
//    /**
//     * "Deletes" (Cancels) an Event entity via POST request.
//     */
//    #[Route('/{id}', name: 'app_admin_event_delete', methods: ['POST'])]
//    public function delete(Request $request, Event $event): Response
//    {
//        // Use a unique token name, e.g., 'delete_admin_' prefix
//        if ($this->isCsrfTokenValid('delete_admin_' . $event->getId(), $request->request->get('_token'))) {
//            $newStatus = $event->getStatut(); // Keep current status by default
//            $message = '';
//            $success = false;
//
//            // Instead of removing, change status to ANNULE if applicable
//            if (!in_array($event->getStatut(), ['TERMINE', 'ANNULE'])) {
//                $event->setStatut('ANNULE'); // Use correct status value
//                $this->entityManager->flush();
//                $message = 'Événement annulé avec succès.';
//                $success = true;
//                $newStatus = 'ANNULE';
//            } else {
//                $message = 'L\'événement est déjà terminé ou annulé.';
//                $success = false; // Indicate no change was made
//            }
//
//            // Handle AJAX request
//            if ($request->isXmlHttpRequest()) {
//                return new JsonResponse([
//                    'success' => $success,
//                    'message' => $message,
//                    'newStatut' => $newStatus // Send back new status for potential UI update
//                ]);
//            }
//
//            // Standard flash message for non-AJAX requests
//            $this->addFlash($success ? 'success' : 'warning', $message);
//
//        } else {
//            if ($request->isXmlHttpRequest()) {
//                return new JsonResponse(['success' => false, 'error' => 'Token CSRF invalide.'], Response::HTTP_BAD_REQUEST);
//            }
//            $this->addFlash('error', 'Token CSRF invalide.');
//        }
//
//        return $this->redirectToRoute('app_admin_events'); // Redirect to index
//    }
//
//    /**
//     * Shows participants for a specific event.
//     */
//    #[Route('/{id}/participants', name: 'app_admin_event_participants')]
//    public function eventParticipants(Event $event, ParticipationRepository $participationRepo): Response
//    {
//        // Fetch participations specifically for this event
//        $participations = $participationRepo->findBy(['event' => $event], ['dateInscription' => 'DESC']);
//
//        return $this->render('admin/event_participants.html.twig', [
//            'event' => $event,
//            'participants' => $participations, // Pass the fetched participations
//        ]);
//    }
//}
//
//// Helper function (can be placed in a utility class or trait if used often)
//if (!function_exists('ends_with')) {
//    function ends_with(string $haystack, string $needle): bool
//    {
//        return str_ends_with($haystack, $needle); // Use built-in str_ends_with if PHP 8+
//        // Fallback for older PHP: return substr($haystack, -strlen($needle)) === $needle;
//    }
//}