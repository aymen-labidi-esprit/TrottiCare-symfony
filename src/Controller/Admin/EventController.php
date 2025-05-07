<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\ParticipationRepository;
use App\Enum\GouvernoratEnum;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/events')]
class EventController extends AbstractController
{
    private LoggerInterface $logger;
    private EntityManagerInterface $entityManager;
    private HttpClientInterface $httpClient;
    private string $openAiApiKey;

    // Inject necessary services including HttpClient and the API key
    public function __construct(
        LoggerInterface $logger,
        EntityManagerInterface $entityManager,
        HttpClientInterface $httpClient,
    ) {
        $this->logger = $logger;
        $this->entityManager = $entityManager;
        $this->httpClient = $httpClient;
        $this->openAiApiKey = "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";
    }







    /**
     * Displays a specific Event entity.
     */
    #[Route('/{id}', name: 'app_admin_event_show', requirements: ['id' => '\d+'], methods: ['GET'])]
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
    #[Route('/{id}/edit', name: 'app_admin_event_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
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
    #[Route('/{id}', name: 'app_admin_event_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
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
    #[Route('/{id}/participants', name: 'app_admin_event_participants', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function eventParticipants(Event $event, ParticipationRepository $participationRepo): Response
    {
        // Fetch participations specifically for this event
        $participations = $participationRepo->findBy(['event' => $event], ['dateInscription' => 'DESC']);

        return $this->render('admin/event_participants.html.twig', [
            'event' => $event,
            'participants' => $participations, // Pass the fetched participations
        ]);
    }







    // --- UPDATED ACTION FOR OPENAI GENERATION ---
    #[Route('/generate-details', name: 'app_admin_event_generate_details', methods: ['POST'])]
    public function generateDetailsFromDescription(Request $request): JsonResponse
    {
        $description = $request->request->get('description');

        if (empty($description)) {
            return new JsonResponse(['success' => false, 'message' => 'Description manquante.'], Response::HTTP_BAD_REQUEST);
        }


        // Use the system prompt from the Java example
        $systemPrompt = <<<PROMPT
        You are an event generator. Given an event description, output a JSON object with keys en francais: title, description, startDate (yyyy-MM-dd), endDate (yyyy-MM-dd), autonomy (an integer), and status (one of A_VENIR, EN_COURS, TERMINE, ANNULE). Example JSON: {"title":"Evenement X", "description":"Une description enrichie", "startDate":"2025-03-10", "endDate":"2025-03-12", "autonomy":"100", "status":"EN_COURS"}
        PROMPT;

        // User prompt is the description
        $userPrompt = $description;

        $apiUrl = 'https://api.openai.com/v1/chat/completions';

        try {
            $this->logger->info("Sending request to OpenAI API for event generation.");
            $this->logger->debug("Prompt sent to OpenAI:", ['system' => $systemPrompt, 'user' => $userPrompt]);

            $response = $this->httpClient->request('POST', $apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->openAiApiKey, // Use the injected key
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-4o-mini', // Or gpt-3.5-turbo as in Java example
                    'messages' => [
                        // Match the Java payload structure
                        ['role' => 'system', 'content' => $systemPrompt],
                        ['role' => 'user', 'content' => $userPrompt]
                    ],
                    'temperature' => 0.5, // Adjust temperature if needed
                    'max_tokens' => 200, // Adjust token limit
                    // 'response_format' => ['type' => 'json_object'] // Keep if supported and desired
                ],
                'timeout' => 45,
            ]);

            $statusCode = $response->getStatusCode();
            $rawApiResponseContent = $response->getContent();
            $this->logger->info("==== RAW OpenAI API Response Content ====");
            $this->logger->info($rawApiResponseContent);
            $this->logger->info("=========================================");

            $responseData = $response->toArray();

            $this->logger->debug("OpenAI API Response Status: " . $statusCode);
            $this->logger->debug("OpenAI API Response Parsed Body: ", $responseData);

            if (!isset($responseData['choices'][0]['message']['content'])) {
                $this->logger->warning("Unexpected OpenAI response structure: 'choices[0].message.content' missing.", ['response' => $responseData]);
                throw new \Exception("Format de réponse OpenAI inattendu.");
            }

            $aiContent = trim($responseData['choices'][0]['message']['content']);
            $this->logger->info("Received content string from OpenAI: " . $aiContent);

            // --- Attempt to decode the content as JSON ---
            $extractedData = [];
            if (!empty($aiContent)) {
                try {
                    // Remove potential markdown ```json ... ``` blocks if present
                    $jsonString = preg_replace('/^```json\s*|\s*```$/', '', $aiContent);
                    $extractedData = json_decode($jsonString, true, 512, JSON_THROW_ON_ERROR);
                    if (!is_array($extractedData)) {
                        throw new \JsonException("Decoded AI response is not a valid JSON object/array.");
                    }
                    $this->logger->info("Successfully decoded JSON from AI.", $extractedData);
                } catch (\JsonException $e) {
                    // If JSON decoding fails, log it but DON'T use the fallback parser from previous attempts
                    // because the Java code *expects* JSON. We should return an error if JSON isn't received.
                    $this->logger->error("Failed to decode EXPECTED JSON response from AI: " . $e->getMessage(), ['raw_response' => $aiContent]);
                    throw new \Exception("L'IA n'a pas retourné un JSON valide comme attendu.");
                }
            } else {
                $this->logger->warning("AI returned empty content string.");
                throw new \Exception("L'IA a retourné une réponse vide.");
            }

            // --- Data Cleaning and Mapping (using keys from Java example) ---
            if (!empty($extractedData) && is_array($extractedData)) {
                $cleanedData = [];

                // Titre (from 'title')
                if (!empty($extractedData['title']) && is_string($extractedData['title'])) {
                    $cleanedData['titre'] = trim($extractedData['title']);
                }
                // Description (from 'description' - overwrite original?)
                if (!empty($extractedData['description']) && is_string($extractedData['description'])) {
                    // Decide if you want to overwrite the user's description
                    // $cleanedData['description'] = trim($extractedData['description']);
                }

                // Dates (from 'startDate', 'endDate' - format for HTML input)
                if (!empty($extractedData['startDate']) && is_string($extractedData['startDate'])) {
                    $dateTime = \DateTime::createFromFormat('Y-m-d', $extractedData['startDate']); // Expecting yyyy-MM-dd
                    if ($dateTime instanceof \DateTimeInterface) {
                        $cleanedData['dateDebut'] = $dateTime->format('Y-m-d\T00:00'); // Set time to 00:00 for date-only input
                    } else { $this->logger->warning("Invalid startDate format '{$extractedData['startDate']}' from AI"); }
                }
                if (!empty($extractedData['endDate']) && is_string($extractedData['endDate'])) {
                    $dateTime = \DateTime::createFromFormat('Y-m-d', $extractedData['endDate']);
                    if ($dateTime instanceof \DateTimeInterface) {
                        $cleanedData['dateFin'] = $dateTime->format('Y-m-d\T23:59'); // Set time to end of day
                    } else { $this->logger->warning("Invalid endDate format '{$extractedData['endDate']}' from AI"); }
                }

                // Autonomie (from 'autonomy')
                if (isset($extractedData['autonomy']) && filter_var($extractedData['autonomy'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]) !== false) {
                    $cleanedData['trottinetteMinAutonomie'] = (int) $extractedData['autonomy'];
                } elseif (isset($extractedData['autonomy'])) {
                    $this->logger->warning("Invalid autonomy value from AI: {$extractedData['autonomy']}");
                }

                // Statut (from 'status' - mainly for reference, form likely defaults to A_VENIR)
                if (!empty($extractedData['status']) && is_string($extractedData['status']) && in_array($extractedData['status'], ["A_VENIR", "EN_COURS", "TERMINE", "ANNULE"])) {
                    // $cleanedData['statut'] = $extractedData['status']; // Not usually set by AI for new events
                }

                // --- ADD RANDOM LOCATION ---
                $governorates = GouvernoratEnum::cases();
                if (!empty($governorates)) {
                    $randomIndex = array_rand($governorates);
                    $randomGovernorate = $governorates[$randomIndex];
                    $cleanedData['state'] = $randomGovernorate->value; // Add the Enum *value* for the form select
                    $this->logger->info("Randomly selected state: " . $randomGovernorate->value);
                } else {
                    $this->logger->warning("Could not get GouvernoratEnum cases for random selection.");
                }
                // --- END RANDOM LOCATION ---

                if (empty($cleanedData)) {
                    $this->logger->warning("No usable data extracted after cleaning.", ['raw_extracted' => $extractedData]);
                    return new JsonResponse(['success' => false, 'message' => "L'IA n'a pas pu extraire d'informations exploitables."]);
                }

                $this->logger->info("Successfully extracted and processed AI data:", $cleanedData);
                return new JsonResponse(['success' => true, 'data' => $cleanedData]);

            } else {
                $this->logger->error("Initial extraction resulted in empty or non-array data.", ['initial_data' => $extractedData]);
                return new JsonResponse(['success' => false, 'message' => "L'IA n'a pas retourné de données structurées."]);
            }

        }
            // Keep existing catch blocks
        catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
            $this->logger->error("OpenAI API Transport Error: " . $e->getMessage(), ['exception' => $e]);
            return new JsonResponse(['success' => false, 'message' => "Erreur de connexion au service OpenAI."], Response::HTTP_SERVICE_UNAVAILABLE);
        } catch (\Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface $e) {
            $this->logger->error("OpenAI API Client Error: " . $e->getMessage(), ['response' => $e->getResponse()->getContent(false), 'exception' => $e]);
            if ($e->getResponse()->getStatusCode() === 401) {
                return new JsonResponse(['success' => false, 'message' => "Erreur d'authentification avec l'API OpenAI (Clé invalide?)."], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            return new JsonResponse(['success' => false, 'message' => "Erreur de l'API OpenAI: " . $e->getResponse()->getInfo('http_code')], Response::HTTP_BAD_GATEWAY);
        } catch (\Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface $e) {
            $this->logger->error("OpenAI API Server Error: " . $e->getMessage(), ['response' => $e->getResponse()->getContent(false), 'exception' => $e]);
            return new JsonResponse(['success' => false, 'message' => "Le service OpenAI rencontre des problèmes. Réessayez plus tard."], Response::HTTP_BAD_GATEWAY);
        } catch (\Exception $e) {
            $this->logger->error("Error processing AI response: " . $e->getMessage(), ['description' => $description, 'prompt' => $systemPrompt."\n".$userPrompt, 'exception' => $e]);
            return new JsonResponse(['success' => false, 'message' => "Erreur interne lors de la génération des détails : " . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Lists all events with filtering, sorting, and pagination for Admins.
     */
    // CORRECTED ROUTE FOR INDEX
    #[Route('/', name: 'app_admin_events', methods: ['GET'])]
    public function index(
        EventRepository    $events,
        Request            $request,
        PaginatorInterface $paginator
    ): Response {
        /* ---------- query parameters & sane defaults -------------------- */
        $search    = trim((string)$request->query->get('search', ''));
        $filter    =              $request->query->get('filter', 'all');
        $page      = max(1, (int) $request->query->get('page',   1));
        $limit     = max(1, (int) $request->query->get('limit', 10));

        // Define allowed sort fields mapping URL key to DQL path
        $allowedSortsMap = [
            'titre'     => 'e.titre',
            'dateDebut' => 'e.dateDebut',
            'statut'    => 'e.statut',
            'state'     => 'e.state', // Maps to Gouvernorat field
            'autonomie' => 'e.trottinetteMinAutonomie',
        ];
        $defaultSortFieldKey = 'dateDebut'; // Default KEY
        $defaultSortDirection = 'desc';

        $sortKey = $request->query->get('sort', $defaultSortFieldKey);
        $sortField = $allowedSortsMap[$sortKey] ?? $allowedSortsMap[$defaultSortFieldKey]; // Get DQL path
        $direction = strtolower($request->query->get('direction', $defaultSortDirection));
        if (!in_array($direction, ['asc', 'desc'])) {
            $direction = $defaultSortDirection;
        }

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
                    'LOWER(e.state)       LIKE :q' // Filter directly on enum value string
                )
            )->setParameter('q', '%' . mb_strtolower($search) . '%');
        }

        $now = new \DateTimeImmutable();
        switch ($filter) {
            case 'upcoming': $qb->andWhere('e.dateDebut >= :now')->setParameter('now', $now); break;
            case 'past':     $qb->andWhere('e.dateDebut <  :now')->setParameter('now', $now); break;
            // Filtering by status ENUM value
            case 'a_venir':  $qb->andWhere('e.statut = :s')->setParameter('s', 'A_VENIR');    break;
            case 'en_cours': $qb->andWhere('e.statut = :s')->setParameter('s', 'EN_COURS');   break;
            case 'termine':  $qb->andWhere('e.statut = :s')->setParameter('s', 'TERMINE');    break;
            case 'annule':   $qb->andWhere('e.statut = :s')->setParameter('s', 'ANNULE');     break;
        }

        /* ---------- pagination (KNP adds ORDER BY automatically) --------- */
        $pagination = $paginator->paginate(
            $qb->getQuery(), // Pass Query object
            $page,
            $limit,
            [
                'pageParameterName'          => 'page',
                'sortFieldParameterName'     => 'sort', // Matches the URL param KEY
                'sortDirectionParameterName' => 'direction',
                'defaultSortFieldName'       => $sortField, // Pass the DQL path
                'defaultSortDirection'       => $direction,
                'distinct'                   => false,
                'sortFieldWhitelist'         => array_values($allowedSortsMap) // Whitelist DQL paths
            ]
        );

        // Fetch status counts for dashboard cards (if needed on this page)
        $countAVenir = $events->countByStatus('A_VENIR');
        $countEnCours = $events->countByStatus('EN_COURS');
        $countTermine = $events->countByStatus('TERMINE');
        $countAnnule = $events->countByStatus('ANNULE');

        /* ---------- view ------------------------------------------------- */
        return $this->render('admin/events.html.twig', [
            'pagination'     => $pagination,
            'current_filter' => $filter,
            'search_term'    => $search,
            'limit'          => $limit,
            'sort'           => $sortKey, // Pass the KEY for active link styling
            'direction'      => $direction,
            'countAVenir' => $countAVenir,
            'countEnCours' => $countEnCours,
            'countTermine' => $countTermine,
            'countAnnule' => $countAnnule,
            'allowedLimits' => [10, 20, 50], // Example allowed limits
            'currentLimit' => $limit,
        ]);
    }





    /**
     * Displays a form to create a new Event entity.
     */
    // CORRECTED ROUTE FOR NEW
    #[Route('/new', name: 'app_admin_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $event = new Event();
        $event->setStatut('A_VENIR'); // Sensible default

        $form = $this->createForm(EventType::class, $event, ['is_admin_edit' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($event);
            $this->entityManager->flush();

            $this->addFlash('success', 'Événement créé avec succès.');
            return $this->redirectToRoute('app_admin_events');
        }

        return $this->render('admin/event_form.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
            'page_title' => 'Nouvel Événement',
            'button_label' => 'Créer',
            'show_ai_button' => true // Flag to show the AI button on the 'new' page
        ]);
    }





    /**
     * AJAX endpoint to generate event details from description using OpenAI.
     */


    /**
     * Attempts to map a location string (from AI) to a GouvernoratEnum value.
     * (This is less relevant now as location is generated randomly, but keep it for potential future use)
     */
    private function mapLocationToGouvernoratValue(?string $locationString): ?string
    {
        if ($locationString === null || trim($locationString) === '') return null;
        $normalizedLocation = mb_strtolower(trim($locationString));
        $mapping = [ /* ... your mapping ... */ ];
        if (isset($mapping[$normalizedLocation])) return $mapping[$normalizedLocation];
        foreach (GouvernoratEnum::cases() as $case) {
            if ($normalizedLocation === mb_strtolower($case->label()) || $normalizedLocation === mb_strtolower($case->value)) return $case->value;
        }
        return null;
    }
}