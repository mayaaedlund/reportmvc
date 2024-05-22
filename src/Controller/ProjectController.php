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
    /**
     * Renders the home page.
     *
     * @return Response The response containing the home page.
     */
    #[Route("/proj", name: "proj")]
    public function home(): Response
    {
        return $this->render('proj/home.html.twig');
    }

    /**
     * Renders the about page.
     *
     * @return Response The response containing the about page.
     */
    #[Route("/proj/about", name: "about")]
    public function about(): Response
    {
        return $this->render('proj/about.html.twig');
    }

    /**
     * Renders the statistic page.
     *
     * @return Response The response containing the statistic page.
     */
    #[Route("/proj/statistic", name: "statistic")]
    public function statistic(): Response
    {
        return $this->render('proj/statistic.html.twig');
    }

    /**
     * Renders the project API page.
     *
     * @return Response The response containing the project API page.
     */
    #[Route("/proj/api", name: "projapi")]
    public function projapi(): Response
    {
        return $this->render('proj/api.html.twig');
    }

    /**
     * Renders the database page.
     *
     * @return Response The response containing the database page.
     */
    #[Route("/proj/about/database", name: "database")]
    public function database(): Response
    {
        return $this->render('proj/database.html.twig');
    }
}
