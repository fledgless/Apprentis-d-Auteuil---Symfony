<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/{category}/{slug}', name: 'page_show', methods: ['GET'])]
    public function show(string $slug, PageRepository $pageRepo): Response
    {
        $page = $pageRepo->findOneBy(['slug' => $slug]);
        return $this->render('page/show.html.twig', [
            'page' => $page
        ]);
    }
}
