<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route("/index/view", name: 'index-view')]
    public function view(): Response
    {
        return $this->render('index/view.html.twig', []);
    }
}
