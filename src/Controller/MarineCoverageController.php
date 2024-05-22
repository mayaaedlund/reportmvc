<?php

namespace App\Controller;

use App\Entity\MarineCoverage;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\MarineCoverageRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class MarineCoverageController extends AbstractController
{
    #[Route('/marine/coverage', name: 'app_marine_coverage')]
    public function index(): Response
    {
        return $this->render('marine_coverage/index.html.twig', [
            'controller_name' => 'MarineCoverageController',
        ]);
    }

    #[Route('/coverage/create', name: 'coverage_create')]
    public function createMarineCoverageData(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $data = [
            'Öst- och Sydostasien' => [
                ['year' => 2000, 'percentage' => 0.95],
                ['year' => 2001, 'percentage' => 0.97],
                ['year' => 2002, 'percentage' => 0.99],
                ['year' => 2003, 'percentage' => 1.09],
                ['year' => 2004, 'percentage' => 1.12],
                ['year' => 2005, 'percentage' => 1.13],
                ['year' => 2006, 'percentage' => 1.19],
                ['year' => 2007, 'percentage' => 1.29],
                ['year' => 2008, 'percentage' => 1.34],
                ['year' => 2009, 'percentage' => 1.68],
                ['year' => 2010, 'percentage' => 1.68],
                ['year' => 2011, 'percentage' => 1.69],
                ['year' => 2012, 'percentage' => 1.71],
                ['year' => 2013, 'percentage' => 2],
                ['year' => 2014, 'percentage' => 2.11],
                ['year' => 2015, 'percentage' => 2.13],
                ['year' => 2016, 'percentage' => 2.16],
                ['year' => 2017, 'percentage' => 2.2],
                ['year' => 2018, 'percentage' => 2.27],
                ['year' => 2019, 'percentage' => 2.27],
            ],
            'Europa och NordAmerika' => [
                ['year' => 2000, 'percentage' => 5.56],
                ['year' => 2001, 'percentage' => 5.78],
                ['year' => 2002, 'percentage' => 8.11],
                ['year' => 2003, 'percentage' => 8.15],
                ['year' => 2004, 'percentage' => 8.25],
                ['year' => 2005, 'percentage' => 8.27],
                ['year' => 2006, 'percentage' => 11.71],
                ['year' => 2007, 'percentage' => 11.75],
                ['year' => 2008, 'percentage' => 12.62],
                ['year' => 2009, 'percentage' => 12.64],
                ['year' => 2010, 'percentage' => 12.78],
                ['year' => 2011, 'percentage' => 12.86],
                ['year' => 2012, 'percentage' => 12.9],
                ['year' => 2013, 'percentage' => 12.95],
                ['year' => 2014, 'percentage' => 13.31],
                ['year' => 2015, 'percentage' => 13.43],
                ['year' => 2016, 'percentage' => 13.64],
                ['year' => 2017, 'percentage' => 14.28],
                ['year' => 2018, 'percentage' => 14.46],
                ['year' => 2019, 'percentage' => 14.46],
            ],
            'Världen' => [
                ['year' => 2000, 'percentage' => 2.23],
                ['year' => 2001, 'percentage' => 2.37],
                ['year' => 2002, 'percentage' => 3],
                ['year' => 2003, 'percentage' => 3.02],
                ['year' => 2004, 'percentage' => 3.09],
                ['year' => 2005, 'percentage' => 3.15],
                ['year' => 2006, 'percentage' => 4.28],
                ['year' => 2007, 'percentage' => 5.11],
                ['year' => 2008, 'percentage' => 5.35],
                ['year' => 2009, 'percentage' => 6.52],
                ['year' => 2010, 'percentage' => 7.27],
                ['year' => 2011, 'percentage' => 7.3],
                ['year' => 2012, 'percentage' => 10.06],
                ['year' => 2013, 'percentage' => 10.24],
                ['year' => 2014, 'percentage' => 11.26],
                ['year' => 2015, 'percentage' => 11.99],
                ['year' => 2016, 'percentage' => 13.67],
                ['year' => 2017, 'percentage' => 16.1],
                ['year' => 2018, 'percentage' => 17.16],
            ],
        ];

        foreach ($data as $region => $years) {
            foreach ($years as $item) {
                $coverage = new MarineCoverage();
                $coverage->setRegion($region);
                $coverage->setYear($item['year']);
                $coverage->setPercentage(floatval($item['percentage']));
                $entityManager->persist($coverage);
            }
        }

        $entityManager->flush();

        return new Response('Saved new marine coverage data.');
    }

    #[Route('/coverage/show', name: 'coverage_show', methods: ['GET'])]
    public function showMarineCoverageData(MarineCoverageRepository $repository): JsonResponse
    {
        $data = $repository->findAll();

        $jsonData = [];
        foreach ($data as $item) {
            $jsonData[] = [
                'region' => $item->getRegion(),
                'year' => $item->getYear(),
                'percentage' => $item->getPercentage(),
            ];
        }

        return new JsonResponse($jsonData);
    }

    #[Route('/coverage/delete', name: 'coverage_delete_all')]
    public function deleteAllMarineCoverage(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        
        $marineCoverage = $entityManager->getRepository(MarineCoverage::class)->findAll();

        foreach ($marineCoverage as $entity) {
            $entityManager->remove($entity);
        }

        $entityManager->flush();

        return new Response('All marine coverage data has been deleted.');
    }



    #[Route('/coverage/data', name: 'coverage_data')]
    public function getMarineData(MarineCoverageRepository $marineCoverageRepository): JsonResponse
    {
        $coverageData = $marineCoverageRepository->findAll();

        // Returnerar datan som JSON
        return $this->json($coverageData);
    }
}
