<?php
// src/Controller/Partenaire/DashboardController.php
namespace App\Controller\Partenaire;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
// You might inject repositories here later if you need stats
 use App\Repository\TrottinetteRepository;
 use App\Repository\EventRepository;

#[Route('/partenaire')]
// IMPORTANT: Apply security HERE at the controller level, not on individual links in Twig
#[IsGranted('ROLE_PARTENAIRE')]
class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_partenaire_dashboard')]
    public function index(
        // Inject repositories if needed for stats later
         TrottinetteRepository $trottinetteRepository,
         EventRepository $eventRepository
    ): Response
    {
        $partenaire = $this->getUser(); // Get the logged-in partner

        // Example: Fetch stats later
         $trottinettesCount = $trottinetteRepository->count(['utilisateur' => $partenaire]);
//         $eventsCount = $eventRepository->count(['organisateur' => $partenaire]); // Assuming an 'organisateur' field

        return $this->render('partenaire/dashboard/index.html.twig', [
            'controller_name' => 'PartenaireDashboardController',
            'partenaire' => $partenaire,
            // Pass stats later:
             'trottinettes_count' => $trottinettesCount,
//             'events_count' => $eventsCount,
        ]);
    }
}