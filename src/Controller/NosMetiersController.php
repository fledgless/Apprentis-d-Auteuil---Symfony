<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NosMetiersController extends AbstractController
{
    #[Route('/nos-metiers', name: 'app_nos_metiers')]
    public function index(): Response
    {
        return $this->render('nos_metiers/index.html.twig', [
            'controller_name' => 'NosMetiersController',
        ]);
    }
}
