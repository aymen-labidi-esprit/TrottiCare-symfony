<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\AdminReclamationType;
use App\Form\ReclamationSearchType;

use App\Form\ReclamationType;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Dto\ReclamationSearchCriteria;
use App\Service\SmsService;


class ReclamationController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // ========== FRONT OFFICE ==========
    
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/reclamations/create', name: 'create_reclamation')]
    public function createReclamation(Request $request, MailerInterface $mailer, SmsService $smsService): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($reclamation);
            $this->entityManager->flush();

            // Send confirmation email
            $email = (new Email())
                ->from('aymen.labidi@esprit.tn')
                ->to($reclamation->getUserEmail())
                ->subject('Confirmation de votre réclamation')
                ->html("
                    <p>Nous avons bien reçu votre réclamation concernant : <strong>{$reclamation->getTitre()}</strong>.</p>
                    <p>Nous allons la traiter dans les plus brefs délais.</p>
                    <p>Merci de faire confiance à TrottiCare !</p>
                ");

            try {
                $mailer->send($email);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de l\'envoi de l\'email: ' . $e->getMessage());
            }

            // Send SMS notification
            $smsMessage = "TrottiCare: Votre réclamation '{$reclamation->getTitre()}' a été reçue. Nous la traiterons bientôt.";
            $smsSent = $smsService->sendSms(+21652344512, $smsMessage);

            if (!$smsSent) {
                $this->addFlash('error', 'Erreur lors de l\'envoi du SMS de confirmation.');
            }

            $this->addFlash('success', 'Réclamation créée avec succès.');
            return $this->redirectToRoute('reclamation_list');
        }

        return $this->render('reclamation/create_reclamation.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reclamations', name: 'reclamation_list')]
    public function listReclamations(Request $request,ReclamationRepository $repository): Response
    {
        $criteria = new ReclamationSearchCriteria();
        $form = $this->createForm(ReclamationSearchType::class, $criteria);
        $form->handleRequest($request);

        $reclamations = $repository->findByCriteriaQuery($criteria)->getResult();

        return $this->render('reclamation/list_reclamations.html.twig', [
            'reclamations' => $reclamations,
            'searchForm' => $form->createView(),
        ]);
    }

    #[Route('/reclamations/{id<\d+>}', name: 'show_reclamation')]
    public function showReclamation(int $id, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation introuvable.');
            return $this->redirectToRoute('reclamation_list');
        }

        return $this->render('reclamation/show_reclamation.html.twig', [
            'reclamation' => $reclamation,
            'reponses' => $reclamation->getReponses(),
        ]);
    }


    #[Route('/reclamation/{id}/edit', name: 'edit_reclamation_front')]
    public function editReclamationFront(int $id, ReclamationRepository $reclamationRepository, Request $request): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation introuvable.');
            return $this->redirectToRoute('reclamation_list');
        }

        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Réclamation modifiée avec succès.');
            return $this->redirectToRoute('reclamation_list');
        }

        return $this->render('edit_reclamation.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/reclamation/{id}/delete', name: 'delete_reclamation_front')]
    public function deleteReclamationFront(int $id, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation introuvable.');
            return $this->redirectToRoute('reclamation_list');
        }

        $this->entityManager->remove($reclamation);
        $this->entityManager->flush();

        $this->addFlash('success', 'Réclamation supprimée avec succès.');
        return $this->redirectToRoute('reclamation_list');
    }

    // ========== ADMIN OFFICE ==========



    #[Route('/admin/reclamations', name: 'admin_reclamations')]
    public function manageReclamations(ReclamationRepository $reclamationRepository): Response
    {
        $reclamations = $reclamationRepository->findAll();
        return $this->render('reclamation/manage_reclamations.html.twig', [
            'reclamations' => $reclamations
        ]);
    }

    #[Route('/admin/reclamation/{id}/edit', name: 'edit_reclamation')]
    public function editReclamationAdmin(int $id, ReclamationRepository $reclamationRepository, Request $request): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $form = $this->createForm(AdminReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Réclamation modifiée avec succès.');
            return $this->redirectToRoute('admin_reclamations');
        }

        return $this->render('edit_reclamation.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/admin/reclamation/{id}/delete', name: 'delete_reclamation')]
    public function deleteReclamationAdmin(int $id, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $this->entityManager->remove($reclamation);
        $this->entityManager->flush();

        $this->addFlash('success', 'Réclamation supprimée avec succès.');
        return $this->redirectToRoute('admin_reclamations');
    }

    #[Route('/admin/reclamation/{id}/add_response', name: 'add_response')]
    public function addResponse(int $id, Request $request, ReclamationRepository $reclamationRepository, SmsService $smsService): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $response = new Reponse();
        $form = $this->createForm(ReponseType::class, $response);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $response->setReclamation($reclamation);
            $response->setDateReponse(new \DateTime());

            $this->entityManager->persist($response);
            $this->entityManager->flush();

            $this->addFlash('success', 'Réponse ajoutée avec succès.');

                 // Send SMS notification
                 $smsMessage = "TrottiCare: Votre réclamation '{$reclamation->getTitre()}' a été trtaite.";
                 $smsSent = $smsService->sendSms(+21652344512, $smsMessage);
     
                 if (!$smsSent) {
                     $this->addFlash('error', 'Erreur lors de l\'envoi du SMS de confirmation.');
                 }
     
                 $this->addFlash('success', 'Réclamation créée avec succès.');
            return $this->redirectToRoute('admin_reclamations');
        }

        return $this->render('reclamation/add_response.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation
        ]);
    }

    #[Route('/admin/reclamation/{id}/responses', name: 'view_responses')]
    public function viewResponses(int $id, ReclamationRepository $reclamationRepository, ReponseRepository $reponseRepository): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $responses = $reponseRepository->findBy(['reclamation' => $reclamation]);

        return $this->render('reclamation/view_responses.html.twig', [
            'reclamation' => $reclamation,
            'responses' => $responses
        ]);
    }

    #[Route('/admin/response/{id}/edit', name: 'edit_response')]
    public function editResponse(int $id, Request $request, ReponseRepository $reponseRepository): Response
    {
        $response = $reponseRepository->find($id);

        if (!$response) {
            $this->addFlash('error', 'Réponse non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $form = $this->createForm(ReponseType::class, $response);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Réponse modifiée avec succès.');

            return $this->redirectToRoute('view_responses', [
                'id' => $response->getReclamation()->getId()
            ]);
        }

        return $this->render('reclamation/edit_response.html.twig', [
            'form' => $form->createView(),
            'response' => $response
        ]);
    }

    #[Route('/admin/response/{id}/delete', name: 'delete_response')]
    public function deleteResponse(int $id, ReponseRepository $reponseRepository): Response
    {
        $response = $reponseRepository->find($id);

        if (!$response) {
            $this->addFlash('error', 'Réponse non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $reclamationId = $response->getReclamation()->getId();

        $this->entityManager->remove($response);
        $this->entityManager->flush();

        $this->addFlash('success', 'Réponse supprimée avec succès.');
        return $this->redirectToRoute('view_responses', [
            'id' => $reclamationId
        ]);
    }
}
