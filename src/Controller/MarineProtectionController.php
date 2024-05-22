<?php

namespace App\Controller;

use App\Entity\MarineProtection;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\MarineProtectionRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class MarineProtectionController extends AbstractController
{
    #[Route('/marine/protection', name: 'app_marine_protection')]
    public function index(): Response
    {
        return $this->render('marine_protection/index.html.twig', [
            'controller_name' => 'MarineProtectionController',
        ]);
    }

    #[Route('/marine/create', name: 'marine_protection_create')]
    public function createMarineProtection(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        // Create new MarineProtection entity for Riket
        $riket = new MarineProtection();
        $riket->setRegion('Riket');
        $riket->setYear2022(14);
        $riket->setYear2021(14);
        $riket->setYear2020(14);
        $riket->setYear2019(14);
        $riket->setYear2018(14);
        // Continue setting values for each year as necessary

        // Create new MarineProtection entity for Västerhavet
        $vasterhavet = new MarineProtection();
        $vasterhavet->setRegion('Västerhavet');
        $vasterhavet->setYear2022(32);
        $vasterhavet->setYear2021(32);
        $vasterhavet->setYear2020(32);
        $vasterhavet->setYear2019(32);
        $vasterhavet->setYear2018(32);
        // Since the value is constant for all years, no need to repeat for each year

        $ostersjon = new MarineProtection();
        $ostersjon->setRegion('Östersjön');
        $ostersjon->setYear2022(17);
        $ostersjon->setYear2021(17);
        $ostersjon->setYear2020(17);
        $ostersjon->setYear2019(16);
        $ostersjon->setYear2018(16);

        $bottniska = new MarineProtection();
        $bottniska->setRegion('Bottniska Viken');
        $bottniska->setYear2022(5);
        $bottniska->setYear2021(5);
        $bottniska->setYear2020(5);
        $bottniska->setYear2019(5);
        $bottniska->setYear2018(5);

        // Tell Doctrine you want to (eventually) save the MarineProtection entities
        $entityManager->persist($riket);
        $entityManager->persist($vasterhavet);
        $entityManager->persist($ostersjon);
        $entityManager->persist($bottniska);

        // Actually execute the queries (i.e. the INSERT queries)
        $entityManager->flush();

        return new Response('Saved new marine protection data.');
    }

    #[Route('/marine/show', name: 'marine_show')]
    public function showAllMarine(
        MarineProtectionRepository $marineprotectionRepository
    ): Response {
        $marine = $marineprotectionRepository
            ->findAll();

        return $this->json($marine);
    }

    #[Route('/marine/delete', name: 'marine_delete_all')]
    public function deleteAllMarine(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        
        // Hämta alla MarineProtection-objekt
        $marine = $entityManager->getRepository(MarineProtection::class)->findAll();

        // Loopa genom och ta bort varje objekt
        foreach ($marine as $entity) {
            $entityManager->remove($entity);
        }

        // Utför DELETE-frågor
        $entityManager->flush();

        return new Response('All marine protection data has been deleted.');
    }

    #[Route('/marine/data', name: 'marine_data')]
    public function getMarineData(MarineProtectionRepository $marineProtectionRepository): JsonResponse
    {
        $marineData = $marineProtectionRepository->findAll();

        // Returnerar datan som JSON
        return $this->json($marineData);
    }
}
