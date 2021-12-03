<?php

namespace App\Controller;

use App\Service\MyCustomService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private MyCustomService $service;

    public function __construct(MyCustomService $myCustomService)
    {
        $this->service = $myCustomService;
    }

    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/health", name="home_health")
     */
    public function health(): Response
    {
        return $this->json([
            'APP_ENV' => $this->service->env()
        ]);
    }

    /*
    public function deploy(): Response
    {
        return $this->json([
            'message' => 'Successful dev deploy!'
        ]);
    }
    */
}
