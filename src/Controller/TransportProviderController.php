<?php

namespace App\Controller;

use App\Entity\TransportProvider;
use App\Form\TransportProviderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransportProviderController extends AbstractController
{
    #[Route('/transport/provider', name: 'app_transport_provider')]
    public function index(): Response
    {
        return $this->render('transport_provider/index.html.twig', [
            'controller_name' => 'TransportProviderController',
        ]);
    }

    #[Route('/transport-provider/add', name: 'add_transport_provider')]
    public function addRoute(): Response
    {
        $transportProvider = new TransportProvider();

        $form = $this->createForm(TransportProviderType::class, $transportProvider);

        return $this->render('transport_provider/add.html.twig',[
            'form' => $form,
        ]);
    }
}
