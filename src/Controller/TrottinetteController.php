<?php

namespace App\Controller;

use App\Entity\Trottinette;
use App\Entity\Utilisateur;
use App\Form\TrottinetteType;
use App\Repository\TrottinetteRepository;
use App\Repository\UtilisateurRepository;
use App\Service\DataFixturesService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormError;

#[Route('/trottinette')]
class TrottinetteController extends AbstractController
{
   
}