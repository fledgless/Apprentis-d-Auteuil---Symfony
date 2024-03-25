<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UnEcrinVertController extends AbstractController
{
    #[Route('/un-ecrin-vert', name: 'app_un_ecrin_vert')]
    public function index(): Response
    {
        return $this->render('un_ecrin_vert/index.html.twig', [
            'controller_name' => 'UnEcrinVertController',
        ]);
    }
}
