<?php
// src/Controller/ParticipationController.php
namespace App\Controller;

use App\Entity\Participation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class ParticipationController extends AbstractController
{
    #[Route('/participation/{id}/details', name: 'participation_details', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function showDetails(Participation $participation): Response
    {
        // ParamConverter automatically fetches the Participation by ID.
        // If not found, it throws a 404 exception.

        $event = $participation->getEvent();
        $user = $participation->getUtilisateur();

        if (!$event || !$user) {
            // This should ideally not happen if data integrity is maintained
            throw new NotFoundHttpException('Données associées à la participation introuvables.');
        }

        return $this->render('participation/details.html.twig', [
            'participation' => $participation,
            'event' => $event,
            'user' => $user,
        ]);
    }
}