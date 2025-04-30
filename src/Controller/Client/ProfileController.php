<?php
// src/Controller/Client/ProfileController.php
namespace App\Controller\Client;

use App\Entity\Utilisateur;
use App\Form\ProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Service\FacialRecognitionService; // Import the service

#[Route('/mon-profil')]
#[IsGranted('ROLE_USER')]
class ProfileController extends AbstractController
{
    private FacialRecognitionService $faceRecService;
    private EntityManagerInterface $entityManager;

    public function __construct(FacialRecognitionService $faceRecService, EntityManagerInterface $entityManager)
    {
        $this->faceRecService = $faceRecService;
        $this->entityManager = $entityManager;
    }

    #[Route('', name: 'app_client_profile_view', methods: ['GET'])]
    public function view(): Response
    {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();

        if (!$user instanceof Utilisateur) {
            $this->addFlash('warning', 'Utilisateur non trouvé.');
            return $this->redirectToRoute('app_login_page');
        }

        return $this->render('client/profile/view.html.twig', [
            'utilisateur' => $user,
            // Pass flag indicating if face embedding exists
            'has_face_setup' => !empty($user->getFaceEmbedding())
        ]);
    }

    #[Route('/edit', name: 'app_client_profile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $this->getUser();
        if (!$user instanceof \App\Entity\Utilisateur) {
            return $this->redirectToRoute('app_login_page');
        }

        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle optional password change if implemented in ProfileType
            // ... (logic for hashing new password if provided) ...

            $this->entityManager->flush();
            $this->addFlash('success', 'Profil mis à jour avec succès.');
            return $this->redirectToRoute('app_client_profile_view');
        }

        return $this->render('client/profile/edit.html.twig', [
            'utilisateur' => $user,
            'profileForm' => $form->createView(),
        ]);
    }

    // --- NEW: Action for Facial Recognition Setup/Update ---
    #[Route('/setup-face', name: 'app_client_profile_setup_face', methods: ['POST'])]
    public function setupFacialRecognition(Request $request): JsonResponse
    {
        /** @var Utilisateur|null $user */
        $user = $this->getUser();
        if (!$user instanceof Utilisateur) {
            return new JsonResponse(['success' => false, 'message' => 'Authentification requise.'], Response::HTTP_UNAUTHORIZED);
        }

        // Expecting comma-separated descriptor string from frontend JS
        $embeddingData = $request->request->get('face_embedding_data'); // Match the key used in JS fetch body

        if (empty($embeddingData) || !is_string($embeddingData)) {
            return new JsonResponse(['success' => false, 'message' => 'Données faciales manquantes ou invalides.'], Response::HTTP_BAD_REQUEST);
        }

        // Basic format validation (comma-separated numbers)
        if (!preg_match('/^[-0-9.,]+$/', $embeddingData)) {
            return new JsonResponse(['success' => false, 'message' => 'Format de données faciales invalide.'], Response::HTTP_BAD_REQUEST);
        }
        // Optional: More robust check (count commas, etc.)
        if (substr_count($embeddingData, ',') !== 127) { // 128 values have 127 commas
            return new JsonResponse(['success' => false, 'message' => 'Nombre incorrect de valeurs faciales.'], Response::HTTP_BAD_REQUEST);
        }

        try {
            // Directly save the embedding string provided by the JS (which came from face-api)
            $user->setFaceEmbedding($embeddingData);
            $this->entityManager->flush(); // Save changes

            // Flash message will be shown on next page load (after JS potentially reloads)
            $this->addFlash('success', 'Reconnaissance faciale configurée avec succès!');

            return new JsonResponse(['success' => true, 'message' => 'Configuration faciale enregistrée.']);

        } catch (\Exception $e) {
            // Log the error server-side
            error_log('Facial recognition setup DB error for user ' . $user->getId() . ': ' . $e->getMessage());
            return new JsonResponse(['success' => false, 'message' => 'Erreur interne lors de l\'enregistrement. Veuillez réessayer.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    // --- END NEW ACTION ---
}