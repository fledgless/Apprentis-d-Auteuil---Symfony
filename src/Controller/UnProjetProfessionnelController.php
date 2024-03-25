<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UnProjetProfessionnelController extends AbstractController
{
    #[Route('/un-projet-professionnel', name: 'app_un_projet_professionnel')]
    public function index(): Response
    {
        return $this->render('un_projet_professionnel/index.html.twig', [
            'controller_name' => 'UnProjetProfessionnelController',
        ]);
    }
}
