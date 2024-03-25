<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NosDispositifsDInsertionController extends AbstractController
{
    #[Route('/nos-dispositifs-d-insertion', name: 'app_nos_dispositifs_d_insertion')]
    public function index(): Response
    {
        return $this->render('nos_dispositifs_d_insertion/index.html.twig', [
            'controller_name' => 'NosDispositifsDInsertionController',
        ]);
    }
}
