<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EspaceEntrepriseController extends AbstractController
{
    #[Route('/espace-entreprise', name: 'app_espace_entreprise')]
    public function index(): Response
    {
        return $this->render('espace_entreprise/index.html.twig', [
            'controller_name' => 'EspaceEntrepriseController',
        ]);
    }
}
