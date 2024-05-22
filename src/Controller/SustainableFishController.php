<?php

namespace App\Controller;

use App\Entity\SustainableFish;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\SustainableFishRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class SustainableFishController extends AbstractController
{
    #[Route('/sustainable', name: 'app_sustainable')]
    public function index(): Response
    {
        return $this->render('sustainable/index.html.twig', [
            'controller_name' => 'SustainableController',
        ]);
    }

    #[Route('/sustainable/create', name: 'sustainable_create')]
    public function createSustainableFishData(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $data = [
            ['year' => 2021, 'sustainablePercentage' => 52, 'sustainableAmount' => 36, 'assessedAmount' => 65],
            ['year' => 2020, 'sustainablePercentage' => 45, 'sustainableAmount' => 30, 'assessedAmount' => 62],
            ['year' => 2019, 'sustainablePercentage' => 40, 'sustainableAmount' => 27, 'assessedAmount' => 60],
            ['year' => 2018, 'sustainablePercentage' => 42, 'sustainableAmount' => 29, 'assessedAmount' => 61],
            ['year' => 2017, 'sustainablePercentage' => 44, 'sustainableAmount' => 29, 'assessedAmount' => 56],
            ['year' => 2016, 'sustainablePercentage' => 52, 'sustainableAmount' => 34, 'assessedAmount' => 57],
            ['year' => 2015, 'sustainablePercentage' => 46, 'sustainableAmount' => 29, 'assessedAmount' => 52],
        ];

        foreach ($data as $item) {
            $sustainableFish = new SustainableFish();
            $sustainableFish->setYear($item['year']);
            $sustainableFish->setSustainablePercentage($item['sustainablePercentage']);
            $sustainableFish->setSustainableAmount($item['sustainableAmount']);
            $sustainableFish->setAssessedAmount($item['assessedAmount']);
            $entityManager->persist($sustainableFish);
        }

        $entityManager->flush();

        return new Response('Saved new sustainable fish data.');
    }

    #[Route('/sustainable/data', name: 'sustainable_data')]
    public function getSustainableFishData(SustainableFishRepository $repository): JsonResponse
    {
        $data = $repository->findAll();

        return $this->json($data);
    }

    #[Route('/sustainable/show', name: 'sustainable_show', methods: ['GET'])]
    public function showSustainableFishData(SustainableFishRepository $repository): JsonResponse
    {
        $data = $repository->findAll();

        $jsonData = [];
        foreach ($data as $item) {
            $jsonData[] = [
                'year' => $item->getYear(),
                'sustainablePercentage' => $item->getSustainablePercentage(),
                'sustainableAmount' => $item->getSustainableAmount(),
                'assessedAmount' => $item->getAssessedAmount(),
            ];
        }

        return new JsonResponse($jsonData);
    }

    #[Route('/sustainable/delete', name: 'sustainable_delete_all')]
    public function deleteAllSustainable(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        
        $sustainableFish = $entityManager->getRepository(SustainableFish::class)->findAll();

        foreach ($sustainableFish as $entity) {
            $entityManager->remove($entity);
        }

        $entityManager->flush();

        return new Response('All sustainable fish data has been deleted.');
    }

}
