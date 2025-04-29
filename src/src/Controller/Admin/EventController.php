<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use App\Form\EventType; // Needed for New/Edit actions
use App\Repository\EventRepository;
use App\Repository\ParticipationRepository; // Needed for Participants action
use App\Enum\GouvernoratEnum; // Potentially needed for filters
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;

#[IsGranted('ROLE_ADMIN')] // Secure the entire controller for Admins
#[Route('/admin/events')] // Base route for admin event actions
class EventController extends AbstractController
{
    private LoggerInterface $logger;
    private EntityManagerInterface $entityManager;

    // Inject necessary services
    public function __construct(
        LoggerInterface $logger,
        EntityManagerInterface $entityManager
    ) {
        $this->logger = $logger;
        $this->entityManager = $entityManager;
    }

    /**
     * Lists all events with filtering, sorting, and pagination for Admins.
     */
// ---------------------------------------------------------------------
//  Lists events (search + filter + sort + pagination)
// ---------------------------------------------------------------------
    #[Route('/', name: 'app_admin_events', methods: ['GET'])]
    public function index(
        EventRepository    $events,
        Request            $request,
        PaginatorInterface $paginator,
    ): Response
    {
        /* ---------- query parameters & sane defaults -------------------- */
        $search    = trim((string)$request->query->get('search', ''));
        $filter    =              $request->query->get('filter', 'all');
        $page      = max(1, (int) $request->query->get('page',   1));
        $limit     = max(1, (int) $request->query->get('limit', 10));

        // full DQL paths - MUST match the <th> links below
        $allowed   = [
            'e.titre',
            'e.dateDebut',
            'e.state',
            'e.statut',
        ];
        $sort      = $request->query->get('sort',      'e.dateDebut');
        $direction = strtolower($request->query->get('direction', 'desc'));

        if (!in_array($sort, $allowed, true))        { $sort = 'e.dateDebut'; }
        if (!in_array($direction, ['asc','desc']))   { $direction = 'desc';   }

        /* ---------- query builder --------------------------------------- */
        $qb = $events->createQueryBuilder('e')
            ->leftJoin('e.participations', 'p')
            ->addSelect('COUNT(p.id) AS participantCount')
            ->groupBy('e.id');

        if ($search !== '') {
            $qb->andWhere(
                $qb->expr()->orX(
                    'LOWER(e.titre)       LIKE :q',
                    'LOWER(e.description) LIKE :q',
                    'LOWER(e.state)       LIKE :q'
                )
            )->setParameter('q', '%'.mb_strtolower($search).'%');
        }

        $now = new \DateTimeImmutable();
        switch ($filter) {
            case 'upcoming': $qb->andWhere('e.dateDebut >= :now')->setParameter('now',$now); break;
            case 'past':     $qb->andWhere('e.dateDebut <  :now')->setParameter('now',$now); break;
            case 'a_venir':  $qb->andWhere('e.statut = :s')->setParameter('s','A_VENIR');    break;
            case 'en_cours': $qb->andWhere('e.statut = :s')->setParameter('s','EN_COURS');   break;
            case 'termine':  $qb->andWhere('e.statut = :s')->setParameter('s','TERMINE');    break;
            case 'annule':   $qb->andWhere('e.statut = :s')->setParameter('s','ANNULE');     break;
            // default: no extra constraint
        }

        /* ---------- pagination (KNP adds ORDER BY automatically) --------- */
        $pagination = $paginator->paginate(
            $qb,
            $page,
            $limit,
            [
                'sortFieldParameterName'     => 'sort',
                'sortDirectionParameterName' => 'direction',
                'defaultSortFieldName'       => $sort,
                'defaultSortDirection'       => $direction,
                'distinct'                   => true,
            ]
        );

        /* ---------- view ------------------------------------------------- */
        return $this->render('admin/events.html.twig', [
            'pagination'     => $pagination,
            'current_filter' => $filter,
            'search_term'    => $search,
            'limit'          => $limit,
            'sort'           => $sort,
            'direction'      => $direction,
        ]);
    }

    /**
     * Displays a form to create a new Event entity.
     */
    #[Route('/new', name: 'app_admin_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $event = new Event();
        $event->setStatut('A_VENIR'); // Sensible default

        // Tell the form it's NOT an admin edit to hide the status field
        $form = $this->createForm(EventType::class, $event, ['is_admin_edit' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($event);
            $this->entityManager->flush();

            $this->addFlash('success', 'Événement créé avec succès.');
            return $this->redirectToRoute('app_admin_events'); // Redirect to index
        }

        return $this->render('admin/event_form.html.twig', [ // Use a generic form template
            'event' => $event,
            'form' => $form->createView(),
            'page_title' => 'Nouvel Événement',
            'button_label' => 'Créer',
        ]);
    }

    /**
     * Displays a specific Event entity.
     */
    #[Route('/{id}', name: 'app_admin_event_show', methods: ['GET'])]
    public function show(Event $event): Response
    {
        // You might want a dedicated admin show template or reuse a public one
        return $this->render('admin/event_show.html.twig', [
            'event' => $event,
        ]);
    }

    /**
     * Displays a form to edit an existing Event entity.
     */
    #[Route('/{id}/edit', name: 'app_admin_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event): Response
    {
        // Tell the form it IS an admin edit to show the status field
        $form = $this->createForm(EventType::class, $event, ['is_admin_edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', 'Événement mis à jour avec succès.');
            return $this->redirectToRoute('app_admin_events'); // Redirect to index
        }

        return $this->render('admin/event_form.html.twig', [ // Use a generic form template
            'event' => $event,
            'form' => $form->createView(),
            'page_title' => 'Modifier l\'Événement',
            'button_label' => 'Mettre à jour',
        ]);
    }

    /**
     * "Deletes" (Cancels) an Event entity via POST request.
     */
    #[Route('/{id}', name: 'app_admin_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event): Response
    {
        // Use a unique token name, e.g., 'delete_admin_' prefix
        if ($this->isCsrfTokenValid('delete_admin_' . $event->getId(), $request->request->get('_token'))) {
            $newStatus = $event->getStatut(); // Keep current status by default
            $message = '';
            $success = false;

            // Instead of removing, change status to ANNULE if applicable
            if (!in_array($event->getStatut(), ['TERMINE', 'ANNULE'])) {
                $event->setStatut('ANNULE'); // Use correct status value
                $this->entityManager->flush();
                $message = 'Événement annulé avec succès.';
                $success = true;
                $newStatus = 'ANNULE';
            } else {
                $message = 'L\'événement est déjà terminé ou annulé.';
                $success = false; // Indicate no change was made
            }

            // Handle AJAX request
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'success' => $success,
                    'message' => $message,
                    'newStatut' => $newStatus // Send back new status for potential UI update
                ]);
            }

            // Standard flash message for non-AJAX requests
            $this->addFlash($success ? 'success' : 'warning', $message);

        } else {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(['success' => false, 'error' => 'Token CSRF invalide.'], Response::HTTP_BAD_REQUEST);
            }
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_admin_events'); // Redirect to index
    }

    /**
     * Shows participants for a specific event.
     */
    #[Route('/{id}/participants', name: 'app_admin_event_participants')]
    public function eventParticipants(Event $event, ParticipationRepository $participationRepo): Response
    {
        // Fetch participations specifically for this event
        $participations = $participationRepo->findBy(['event' => $event], ['dateInscription' => 'DESC']);

        return $this->render('admin/event_participants.html.twig', [
            'event' => $event,
            'participants' => $participations, // Pass the fetched participations
        ]);
    }
}

// Helper function (can be placed in a utility class or trait if used often)
if (!function_exists('ends_with')) {
    function ends_with(string $haystack, string $needle): bool
    {
        return str_ends_with($haystack, $needle); // Use built-in str_ends_with if PHP 8+
        // Fallback for older PHP: return substr($haystack, -strlen($needle)) === $needle;
    }
}