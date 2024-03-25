<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactezNousController extends AbstractController
{
    #[Route('/contactez-nous', name: 'app_contactez_nous')]
    public function index(): Response
    {
        return $this->render('contactez_nous/index.html.twig', [
            'controller_name' => 'ContactezNousController',
        ]);
    }
}
