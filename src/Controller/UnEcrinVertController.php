<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UnEcrinVertController extends AbstractController
{
    #[Route('/un-ecrin-vert', name: 'app_un_ecrin_vert')]
    public function index(PageRepository $pageRepo): Response
    {
        return $this->render('un_ecrin_vert/index.html.twig', [
            'pages' => $pageRepo->findBy(['category' => 'Un écrin vert']),
        ]);
    }
}
