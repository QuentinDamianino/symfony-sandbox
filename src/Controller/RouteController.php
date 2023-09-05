<?php

namespace App\Controller;


use App\Form\TransportProviderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RouteController extends AbstractController
{
    #[Route('/route', name: 'app_route')]
    public function index(): Response
    {
        return $this->render('route/index.html.twig', [
            'controller_name' => 'RouteController',
        ]);
    }

    #[Route('/route/add', name: 'add_route')]
    public function addRoute(): Response
    {
        $route = new Route();

//        $form = $this->createForm(TransportProviderType::class, $route);
    }
}
