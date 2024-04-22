<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ActualitesController extends AbstractController
{
    #[Route('/actualites', name: 'app_actualites')]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('actualites/index.html.twig', [
            'articles' => $articleRepository->findAll()
        ]);
    }
}
