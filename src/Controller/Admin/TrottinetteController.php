<?php

// src/Controller/Admin/TrottinetteController.php
namespace App\Controller\Admin;

use App\Entity\Trottinette;
use App\Enum\TrottinetteStatus;
use App\Form\TrottinetteFilterType;
use App\Form\TrottinetteType;
use App\Repository\TrottinetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UtilisateurRepository;
use App\Service\DataFixturesService;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\PointRelais;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/admin/trottinettes')]
class TrottinetteController extends AbstractController
{
    private $entityManager;
    private DataFixturesService $dataFixturesService;
    private HttpClientInterface $client;
    // Define allowed limits for items per page
    private const ALLOWED_LIMITS = [10, 15, 25, 50, 100];
    private const DEFAULT_LIMIT = 15; // Set your preferred default

    public function __construct(EntityManagerInterface $entityManager, DataFixturesService $dataFixturesService,HttpClientInterface $client)
    {
        $this->entityManager = $entityManager;
        $this->dataFixturesService = $dataFixturesService;
        $this->client = $client;

    }

    #[Route('/', name: 'admin_trottinette_index', methods: ['GET'])]
    public function index(Request $request, TrottinetteRepository $repository): Response
    {
        $filterForm = $this->createForm(TrottinetteFilterType::class);
        $filterForm->handleRequest($request);

        $criteria = $filterForm->isSubmitted() && $filterForm->isValid() ? $filterForm->getData() : [];

        // --- Pagination Limit Handling ---
        $limit = $request->query->getInt('limit', self::DEFAULT_LIMIT);
        if (!in_array($limit, self::ALLOWED_LIMITS)) {
            $limit = self::DEFAULT_LIMIT;
        }
        // --- End Limit Handling ---


        $pagination = $repository->findFilteredPaginated( // Call the new method
            $criteria,
            $request->query->getInt('page', 1),
            $limit
        );

        // Fetch counts for dashboard cards
        $countDisponible = $repository->countByEtat(TrottinetteStatus::DISPONIBLE);
        $countEnLocation = $repository->countByEtat(TrottinetteStatus::EN_LOCATION);
        $countEnMaintenance = $repository->countByEtat(TrottinetteStatus::EN_MAINTENANCE);

        return $this->render('admin/trottinette/index.html.twig', [
            'pagination' => $pagination, // Pass the pagination object
            'filterForm' => $filterForm->createView(),
            'countDisponible' => $countDisponible,
            'countEnLocation' => $countEnLocation,
            'countEnMaintenance' => $countEnMaintenance,
            'currentLimit' => $limit,
            'allowedLimits' => self::ALLOWED_LIMITS,
        ]);
    }


    #[Route('/new', name: 'admin_trottinette_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UtilisateurRepository $utilisateurRepository): Response
    {
        $trottinette = new Trottinette();

        // Set default values for PointRelais and Utilisateur
        $defaultPointRelaisId = $this->dataFixturesService->getDefaultPointRelaisId();
        $pointRelais = $this->entityManager->getRepository(PointRelais::class)->find($defaultPointRelaisId);
        if ($pointRelais) {
            $trottinette->setPointRelais($pointRelais);
        }

        $defaultUserId = $this->dataFixturesService->getDefaultUserId();
        if ($defaultUserId) {
            $utilisateur = $utilisateurRepository->find($defaultUserId);
            if ($utilisateur) {
                $trottinette->setUtilisateur($utilisateur);
            }
        }

        // Create the form
        $form = $this->createForm(TrottinetteType::class, $trottinette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $trottinette->setDateAjout(new \DateTime()); // Set the date of creation
            // Création du SMS
            $emailBodyText = "Une nouvelle trottinette a été ajoutée au système.\n\nDétails:\nID: {$trottinette->getId()}\nModèle: {$trottinette->getModele()}\nDate d'ajout: {$trottinette->getDateAjout()->format('Y-m-d H:i:s')}";
            // Optional: Create an HTML body for nicer formatting

            $trottinetteInfo = 'Trottinette #' . $trottinette->getId() . ' (' . $trottinette->getModele() . ')';

            $emailBodyHtml = "<p>Une nouvelle trottinette a été ajoutée au système.</p>
                                  <p><strong>Détails:</strong></p>
                                  <ul>
                                      <li>Batterie: {$trottinette->getBatterie()}</li>
                                      <li>Autonomie: {$trottinette->getAutonomie()}</li>
                                      <li>Modèle: {$trottinette->getModele()}</li>
                                      <li>Date d'ajout: {$trottinette->getDateAjout()->format('Y-m-d H:i:s')}</li>
                                  </ul>";
            $emailSubject = 'Nouvelle Trottinette Ajoutée: ' . $trottinetteInfo;

            $headers = [
                'Content-Type' => 'application/json',
            ];
            $payload = [
                'title' => $emailSubject,
                'body' => $emailBodyHtml,
            ];

            $this->client->request('POST', "https://hook.eu1.make.com/sfdhlqdyn553tmy0i8ldk7eq1nwrriee", [
                'headers' => $headers,
                'json' => $payload,
            ]);

            try {
                $this->entityManager->persist($trottinette);
                $this->entityManager->flush();
                $this->addFlash('success', 'La trottinette a été ajoutée avec succès.');
                return $this->redirectToRoute('admin_trottinette_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de l\'ajout de la trottinette: ' . $e->getMessage());
            }
        }

        return $this->render('admin/trottinette/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/admin/trottinettes/{id}', name: 'admin_trottinette_show', methods: ['GET'])]
    public function show(int $id, TrottinetteRepository $trottinetteRepository): Response
    {
        // Retrieve the trottinette by its ID
        $trottinette = $trottinetteRepository->find($id);

        // Check if the trottinette exists
        if (!$trottinette) {
            throw $this->createNotFoundException('Trottinette not found');
        }

        // Render the template and pass the trottinette entity
        return $this->render('admin/trottinette/show.html.twig', [
            'trottinette' => $trottinette,
        ]);
    }


    #[Route('/{id}/edit', name: 'admin_trottinette_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Trottinette $trottinette, EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository): Response
    {
        $form = $this->createForm(TrottinetteType::class, $trottinette);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    $entityManager->flush();
                    $this->addFlash('success', 'La trottinette a été modifiée avec succès.');
                    return $this->redirectToRoute('admin_trottinette_index');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de la modification de la trottinette: ' . $e->getMessage());
                }
            }
        }
        return $this->render('admin/trottinette/edit.html.twig', [
            'trottinette' => $trottinette,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_trottinette_delete', methods: ['POST'])]
    public function delete(Request $request, Trottinette $trottinette, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trottinette->getId(), $request->request->get('_token'))) {
            $entityManager->remove($trottinette);
            $entityManager->flush();
            $this->addFlash('success', 'La trottinette a été supprimée avec succès.');
        }

        return $this->redirectToRoute('admin_trottinette_index');
    }

    // CRUD actions...
}