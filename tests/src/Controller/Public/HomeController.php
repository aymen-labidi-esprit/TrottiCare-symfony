<?php
namespace App\Controller\Public; // Correct Namespace

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EventRepository; // Example: Inject repo if needed

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EventRepository $eventRepository): Response
    {
        // Example: Fetch upcoming events for the homepage
        $upcomingEvents = $eventRepository->findBy(
            ['statut' => 'A_VENIR'], // Assuming 'A_VENIR' is the status string/enum value
            ['dateDebut' => 'ASC'],
            3 // Limit to 3
        );

        return $this->render('public/home/index.html.twig', [
            'upcoming_events' => $upcomingEvents,
        ]);
    }
}