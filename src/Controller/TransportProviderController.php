<?php

namespace App\Controller;

use App\Entity\TransportProvider;
use App\Form\TransportProviderType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransportProviderController extends AbstractController
{
    #[Route('/transport/provider/{id}', name: 'app_transport_provider')]
    public function index(TransportProvider $transportProvider): Response
    {
        return $this->render('transport_provider/index.html.twig', [
            'transport_provider' => $transportProvider
        ]);
    }

    #[Route('/transport-provider/add', name: 'add_transport_provider')]
    public function addRoute(EntityManagerInterface $entityManager, Request $request): Response
    {
        $transportProvider = new TransportProvider();

        $form = $this->createForm(TransportProviderType::class, $transportProvider);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $transportProvider = $form->getData();

            $entityManager->persist($transportProvider);
            $entityManager->flush();

            $this->addFlash('success', 'Successfully added transport provider');

            return $this->redirectToRoute('app_transport_provider', [
                'id' => $transportProvider->getId()
            ]);
        }

        return $this->render('transport_provider/add.html.twig',[
            'form' => $form,
        ]);
    }

    #[Route('/transport-provider/edit/{id}', name: 'edit_transport_provider')]
    public function editProvider(TransportProvider $transportProvider, EntityManagerInterface $entityManager, Request $request): Response
    {
        $form = $this->createForm(TransportProviderType::class, $transportProvider);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $transportProvider = $form->getData();

            $entityManager->persist($transportProvider);
            $entityManager->flush();

            $this->addFlash('success', 'Successfully edited transport provider');

            return $this->redirectToRoute('app_transport_provider', [
                'id' => $transportProvider->getId()
            ]);
        }

        return $this->render('transport_provider/edit.html.twig',[
            'form' => $form,
        ]);
    }
}
