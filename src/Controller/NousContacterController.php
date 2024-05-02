<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NousContacterController extends AbstractController
{
    #[Route('/nous-contacter', name: 'app_nous_contacter')]
    public function index(): Response
    {
        return $this->render('nous_contacter/index.html.twig', [
            'controller_name' => 'NousContacterController',
        ]);
    }

    #[Route('/nous-contacter/se-preinscrire', name:'app_se_preinscire')]
    public function sePreinscire(): Response
    {
        return $this->render('nous_contacter/sepreinscrire.html.twig', [
            'controller_name' => 'NousContacterController',
        ]);
    }

    #[Route('/nous-contacter/contact', name:'app_contact')]
    public function Contact(): Response
    {
        return $this->render('nous_contacter/contact.html.twig', [
            'controller_name' => 'NousContacterController',
        ]);
    }
}
