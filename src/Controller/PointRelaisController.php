<?php

namespace App\Controller;

use App\Entity\PointRelais;
use App\Form\PointRelaisFormType;
use App\Repository\PointRelaisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/point-relais')]
final class PointRelaisController extends AbstractController
{
    #[Route('/', name: 'point_relais_index', methods: ['GET'])]
    public function index(PointRelaisRepository $pointRelaisRepository): Response
    {
        return $this->render('point_relais/index.html.twig', [
            'point_relais' => $pointRelaisRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'point_relais_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $pointRelais = new PointRelais();
        $form = $this->createForm(PointRelaisFormType::class, $pointRelais);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($pointRelais);
            $em->flush();

            $this->addFlash('success', 'Point relais créé avec succès.');
            return $this->redirectToRoute('point_relais_index');
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('danger', 'Le formulaire contient des erreurs. Veuillez corriger les champs.');
        }

        return $this->render('point_relais/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'point_relais_show', methods: ['GET'])]
    public function show(PointRelais $pointRelais): Response
    {
        return $this->render('point_relais/show.html.twig', [
            'point_relais' => $pointRelais,
        ]);
    }

    #[Route('/{id}/edit', name: 'point_relais_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PointRelais $pointRelais, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(PointRelaisFormType::class, $pointRelais);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Point relais mis à jour avec succès.');

            return $this->redirectToRoute('point_relais_index');
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('danger', 'Le formulaire contient des erreurs. Veuillez corriger les champs.');
        }
        
        return $this->render('point_relais/edit.html.twig', [
            'form' => $form->createView(),
            'point_relais' => $pointRelais,
        ]);
    }

    #[Route('/{id}', name: 'point_relais_delete', methods: ['POST'])]
    public function delete(Request $request, PointRelais $pointRelais, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $pointRelais->getId(), $request->request->get('_token'))) {
            $em->remove($pointRelais);
            $em->flush();
            $this->addFlash('success', 'Point relais supprimé.');
        }

        return $this->redirectToRoute('point_relais_index');
    }
}
