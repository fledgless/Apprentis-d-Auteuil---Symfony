<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ViePratiqueController extends AbstractController
{
    #[Route('/vie-pratique', name: 'app_vie_pratique')]
    public function index(): Response
    {
        return $this->render('vie_pratique/index.html.twig', [
            'controller_name' => 'ViePratiqueController',
        ]);
    }
}
