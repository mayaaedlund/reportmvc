<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProjectController extends AbstractController
{
    #[Route("/proj", name: "proj")]
    public function home(): Response
    {
        return $this->render('proj/home.html.twig');
    }

    #[Route("/proj/about", name: "about")]
    public function about(): Response
    {
        return $this->render('proj/about.html.twig');
    }

    #[Route("/proj/statistic", name: "statistic")]
    public function statistic(): Response
    {
        return $this->render('proj/statistic.html.twig');
    }


}
