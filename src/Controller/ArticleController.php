<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{slug}', name: 'article_show', methods: ['GET'])]
    public function show(string $slug, ArticleRepository $articleRepo): Response
    {
        $article = $articleRepo->findOneBy(['slug' => $slug]);
        if (!$article) {
            return $this->redirectToRoute('app_actualites');
        } else {
            return $this->render('article/show.html.twig', [
                'article' => $article
            ]);
        }
    }
}
