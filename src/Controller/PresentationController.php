<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PresentationController extends AbstractController
{
    #[Route('/presentation', name: 'app_actualites')]
    public function index(PageRepository $pageRepo): Response
    {
        return $this->render('presentation/index.html.twig', [
            'pages' => $pageRepo->findBy(['category' => 'Présentation']),
        ]);
    }
}
