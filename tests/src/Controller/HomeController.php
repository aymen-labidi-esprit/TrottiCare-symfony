<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
// Removed Route attribute, using routes.yaml

class HomeController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
}