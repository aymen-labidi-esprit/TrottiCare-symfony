<?php

namespace App\Controller\Admin;

use App\Entity\Maintenance;
use App\Enum\MaintenanceStatus;
use App\Enum\TrottinetteStatus;
use App\Form\MaintenanceFilterType;
use App\Form\MaintenanceType;
use App\Repository\MaintenanceRepository;
use App\Service\Texter;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\TwilioNotifierService;
use Symfony\Component\Notifier\Message\SmsMessage;
use Symfony\Component\Notifier\Bridge\Twilio\TwilioOptions;
use Symfony\Component\Notifier\TexterInterface;

#[Route('/admin/maintenance')]
#[IsGranted('ROLE_ADMIN')]
class MaintenanceController extends AbstractController
{
    private $twilioNotifierService;

    private HttpClientInterface $client;
    private EntityManagerInterface $entityManager;

    // Define allowed limits for items per page
    private const ALLOWED_LIMITS = [10, 15, 25, 50, 100];
    private const DEFAULT_LIMIT = 15; // Set your preferred default

    public function __construct(
        HttpClientInterface $client,
        EntityManagerInterface $entityManager,
        TwilioNotifierService $twilioNotifierService,

    ) {
        $this->client = $client;
        $this->entityManager = $entityManager;
        $this->twilioNotifierService = $twilioNotifierService;


    }

    #[Route('/', name: 'admin_maintenance_index', methods: ['GET'])]
    public function index(Request $request, MaintenanceRepository $maintenanceRepository,
                          PaginatorInterface $paginator // <-- Inject PaginatorInterface

    ): Response
    {
        $filterForm = $this->createForm(MaintenanceFilterType::class);
        $filterForm->handleRequest($request);

        $criteria = $filterForm->isSubmitted() && $filterForm->isValid() ? $filterForm->getData() : [];

        // --- Pagination Limit Handling ---
        $limit = $request->query->getInt('limit', self::DEFAULT_LIMIT);
        // Validate the requested limit against allowed values
        if (!in_array($limit, self::ALLOWED_LIMITS)) {
            $limit = self::DEFAULT_LIMIT;
        }
        // --- End Pagination Limit Handling ---

        $pagination = $maintenanceRepository->findFilteredPaginated(
            $criteria,
            $request->query->getInt('page', 1),
            $limit // Use the validated or default limit
        );
        $queryBuilder = $maintenanceRepository->createFilteredQueryBuilder($criteria); // Assuming this method exists now

        // --- Change: Use KnpPaginator ---
        $pagination = $paginator->paginate(
            $queryBuilder->getQuery(), // Target to paginate (Doctrine Query)
            $request->query->getInt('page', 1), // Current page number
            $limit // Limit per page
        // Optional: Paginator options array
        // ['defaultSortFieldName' => 'm.dateDebut', 'defaultSortDirection' => 'desc']
        );

        $countEnCours = $maintenanceRepository->countByStatus('EN_COURS');
        $countTerminee = $maintenanceRepository->countByStatus('TERMINEE');
        $countAnnulee = $maintenanceRepository->countByStatus('ANNULEE');

        return $this->render('maintenance/index.html.twig', [
            'pagination' => $pagination,
            'filterForm' => $filterForm->createView(),
            'countEnCours' => $countEnCours,
            'countTerminee' => $countTerminee,
            'countAnnulee' => $countAnnulee,
            // +++ Pass limit info to Twig +++
            'currentLimit' => $limit,
            'allowedLimits' => self::ALLOWED_LIMITS,
            // +++ End Pass limit info +++
        ]);
    }

    // ... (calendarView, new, show, edit, delete methods remain the same) ...
    // --- CALENDAR VIEW (Keep as is) ---
    #[Route('/calendar', name: 'admin_maintenance_calendar', methods: ['GET'])]
    public function calendarView(MaintenanceRepository $maintenanceRepository): Response
    {
        // ... (calendar logic remains the same) ...
        $maintenances = $maintenanceRepository->findAll(); // Fetch all for calendar

        $calendarEvents = [];
        foreach ($maintenances as $maintenance) {
            // ... (formatting logic remains the same) ...
            $trottinetteInfo = $maintenance->getTrottinette()
                ? 'Trott. #' . $maintenance->getTrottinetteId() . ' (' . $maintenance->getTrottinette()->getModele() . ')'
                : 'Trott. #' . $maintenance->getTrottinetteId();

            $color = match($maintenance->getStatut()) {
                'EN_COURS' => '#facc15',
                'TERMINEE' => '#4ade80',
                'ANNULEE' => '#f87171',
                default => '#9ca3af',
            };

            $calendarEvents[] = [
                'id' => $maintenance->getId(),
                'title' => $trottinetteInfo,
                'start' => $maintenance->getDateDebut()->format('Y-m-d H:i:s'),
                'end' => $maintenance->getDateFin()?->format('Y-m-d H:i:s'),
                'color' => $color,
                'extendedProps' => [
                    'description' => $maintenance->getDescription() ?: 'N/A',
                    'statut' => $maintenance->getStatut(),
                    'trottinetteId' => $maintenance->getTrottinetteId(),
                    'trottinetteModele' => $maintenance->getTrottinette()?->getModele(),
                    'trottinetteNumeroSerie' => $maintenance->getTrottinette()?->getNumeroSerie(),
                    'dateFinFormatted' => $maintenance->getDateFin() ? $maintenance->getDateFin()->format('d/m/Y H:i') : 'En cours',
                    'detailsUrl' => $this->generateUrl('admin_maintenance_show', ['id' => $maintenance->getId()])
                ]
            ];
        }

        return $this->render('maintenance/calendar.html.twig', [
            'calendarEvents' => $calendarEvents
        ]);
    }

    // --- NEW ACTION (Keep as is, ensure MaintenanceType is imported) ---
    #[Route('/new', name: 'admin_maintenance_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response // Removed EntityManager injection, using constructor's one
    {
        $maintenance = new Maintenance();
        // Maybe set default status? $maintenance->setStatut(MaintenanceStatus::EN_COURS);
        $form = $this->createForm(MaintenanceType::class, $maintenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($maintenance->getTrottinette()) {
                $maintenance->setTrottinetteId($maintenance->getTrottinette()->getId());
                $trottinette = $maintenance->getTrottinette();
                // Only set to maintenance if not already terminated/cancelled
                if ($maintenance->getStatut() !== MaintenanceStatus::TERMINEE->value && $maintenance->getStatut() !== MaintenanceStatus::ANNULEE->value) {
                    $trottinette->setEtat(TrottinetteStatus::EN_MAINTENANCE);
                }
            }

            $this->entityManager->persist($maintenance);
            $this->entityManager->flush();

            $this->addFlash('success', 'La maintenance a été créée avec succès.');
            return $this->redirectToRoute('admin_maintenance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('maintenance/new.html.twig', [ // Use new.html.twig instead of renderForm
            'maintenance' => $maintenance,
            'form' => $form->createView(), // Pass form view
        ]);
    }

    // --- SHOW ACTION (Keep as is) ---
    #[Route('/{id}', name: 'admin_maintenance_show', methods: ['GET'])]
    public function show(Maintenance $maintenance): Response
    {
        return $this->render('maintenance/show.html.twig', [
            'maintenance' => $maintenance,
        ]);
    }

    // --- EDIT ACTION (Keep mostly as is, ensure MaintenanceType is imported) ---
    #[Route('/{id}/edit', name: 'admin_maintenance_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Maintenance $maintenance): Response // Removed EntityManager injection
    {
        $originalStatus = $maintenance->getStatut(); // Store original status if needed
        $form = $this->createForm(MaintenanceType::class, $maintenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $trottinette = $maintenance->getTrottinette();

            // Logic for updating trottinette status based on maintenance status change
            if ($trottinette) {
                $newStatusValue = $maintenance->getStatut(); // Assuming string value like 'TERMINEE'
                // Use Enum cases if your entity/form uses them directly
                // $newStatus = MaintenanceStatus::tryFrom($maintenance->getStatut());

                if ($newStatusValue === MaintenanceStatus::TERMINEE->value || $newStatusValue === MaintenanceStatus::ANNULEE->value) {
                    // Set trottinette back to DISPONIBLE only if it was previously EN_MAINTENANCE due to *this* maintenance record
                    // This check is simplistic; more complex logic might be needed if multiple maintenances overlap
                    if ($trottinette->getEtat() === TrottinetteStatus::EN_MAINTENANCE) {
                        $trottinette->setEtat(TrottinetteStatus::DISPONIBLE);
                    }



                    // SMS notification logic (only if status becomes TERMINEE)
                    if ($newStatusValue === MaintenanceStatus::TERMINEE->value) {
                        $trottinetteInfo = $trottinette
                            ? 'Trottinette #' . $maintenance->getTrottinetteId() . ' (' . $trottinette->getModele() . ')'
                            : 'Trottinette #' . $maintenance->getTrottinetteId();
                        $smsMessage = "Maintenance terminée pour {$trottinetteInfo}. Elle est maintenant disponible.";
                        $payload = ['body'  => $smsMessage];
                        $headers = ['Content-Type' => 'application/json'];

                        // Consider wrapping API call in try/catch or logging errors
                        try {
                            $texter=new Texter("AC92ce0293654b3bf92f26ad226c54270d","f0d8e15aced4230576ffa30c25700a12","+19342470919");
                            $sms = new SmsMessage('+19342470919', $smsMessage);

                            $texter->send($sms);
//                            $this->client->request('POST', "https://hook.eu1.make.com/ndgogmlq27hd1j6toex8eusathvnag8q", [
//                                'headers' => $headers,
//                                'json'    => $payload,
//                            ]);
                        } catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
                            // Log error, flash message, etc.
                            $this->addFlash('warning', 'Maintenance mise à jour, mais l\'envoi de la notification SMS a échoué: '.$e->getMessage());
                        }
                    }

                } elseif ($newStatusValue === MaintenanceStatus::EN_COURS->value) {
                    // If status is set back to EN_COURS (or created as such), ensure trottinette is marked
                    $trottinette->setEtat(TrottinetteStatus::EN_MAINTENANCE);
                }
            }


            $this->entityManager->flush();
            $this->addFlash('success', 'La maintenance a été mise à jour avec succès.');
            return $this->redirectToRoute('admin_maintenance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('maintenance/edit.html.twig', [ // Use edit.html.twig
            'maintenance' => $maintenance,
            'form' => $form->createView(), // Pass form view
        ]);
    }


    // --- DELETE ACTION (Keep mostly as is) ---
    #[Route('/{id}', name: 'admin_maintenance_delete', methods: ['POST'])]
    public function delete(Request $request, Maintenance $maintenance): Response // Removed EntityManager injection
    {
        if ($this->isCsrfTokenValid('delete'.$maintenance->getId(), $request->request->get('_token'))) {
            $trottinette = $maintenance->getTrottinette();
            // If deleting an 'EN_COURS' maintenance, set scooter back to available
            // Check if the status is indeed EN_COURS before changing scooter state
            if ($trottinette && $maintenance->getStatut() === MaintenanceStatus::EN_COURS->value) {
                if ($trottinette->getEtat() === TrottinetteStatus::EN_MAINTENANCE) {
                    // TODO: Add check: Is there ANOTHER 'EN_COURS' maintenance for this scooter?
                    // If not, set to available. Otherwise, leave it in maintenance.
                    // This requires another query - skipping for simplicity here.
                    $trottinette->setEtat(TrottinetteStatus::DISPONIBLE);
                }
            }

            $this->entityManager->remove($maintenance);
            $this->entityManager->flush();
            $this->addFlash('success', 'La maintenance a été supprimée avec succès.');
        } else {
            $this->addFlash('danger', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('admin_maintenance_index', [], Response::HTTP_SEE_OTHER); // Use SEE_OTHER for POST redirects
    }

    public function sendSms(TexterInterface $texter)
    {
        $sms = new SmsMessage('+21620692262', 'My message');
        $options = (new TwilioOptions())->statusCallback('https://your-webhook-url.com');
        $sms->options($options);

        $texter->send($sms);

        // ...
    }
}