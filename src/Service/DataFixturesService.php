<?php

namespace App\Service;

use App\Entity\PointRelais;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;

class DataFixturesService
{
    private EntityManagerInterface $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function getOrCreateDefaultPointRelais(): PointRelais
    {
        // Try to find an existing default point relais
        $pointRelais = $this->entityManager->getRepository(PointRelais::class)->find(1);
        
        // If none exists, create one
        if (!$pointRelais) {
            $pointRelais = new PointRelais();
            $pointRelais->setNom('Point Relais par défaut');
            $pointRelais->setAdresse('123 Rue Test');
            $pointRelais->setLocalisation('Paris');
            
            // Use proper JSON format for horairesOuverture
            $horaires = json_encode([
                'lundi' => '09:00-18:00',
                'mardi' => '09:00-18:00',
                'mercredi' => '09:00-18:00',
                'jeudi' => '09:00-18:00',
                'vendredi' => '09:00-18:00'
            ]);
            $pointRelais->setHorairesOuverture($horaires);
            
            $this->entityManager->persist($pointRelais);
            $this->entityManager->flush();
        }
        
        return $pointRelais;
    }
    
    public function getOrCreateDefaultUser(): ?Utilisateur
    {
        // Try to find an existing default user
        $user = $this->entityManager->getRepository(Utilisateur::class)->find(1);
        
        // If none exists, create one
        if (!$user) {
            $user = new Utilisateur();
            $user->setEmail('test@example.com');
            $user->setNom('User');
            $user->setPrenom('Test');
            $user->setTelephone('0123456789');
            $user->setPassword('password');  // In a real app, you'd hash this
            $user->setRole('client');
            
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }
        
        return $user;
    }
    
    public function getDefaultPointRelaisId(): int
    {
        return $this->getOrCreateDefaultPointRelais()->getId();
    }
    
    public function getDefaultUserId(): ?int
    {
        $user = $this->getOrCreateDefaultUser();
        return $user ? $user->getId() : null;
    }
}