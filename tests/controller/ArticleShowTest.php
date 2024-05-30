<?php

namespace App\Tests\Entity;

use App\Entity\Article;
use App\Model\TimeStampInterface;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;

class ArticleShowTest extends WebTestCase 
{
    private $entityManager;

    public function setUp(): void
    {
        self::ensureKernelShutdown();
        $client = static::createClient();
        $this->entityManager = $client->getContainer()->get('doctrine')->getManager();

        $article = new Article();
        $article->setTitle('Article test');
        $article->setSlug('article-test');
        $article->setContent("Ceci est un test pour l'entité article.");
        $article->setCategory('Test');
        $article->setCreatedAt(new \DateTime());
      
        $this->entityManager->persist($article);
        $this->entityManager->flush();
    }

    public function testShowArticlePage()
    {
        self::ensureKernelShutdown();
        $client = static::createClient();
        $client->request('GET', '/article/article-test');

        $this->assertResponseIsSuccessful();
        $this->assertAnySelectorTextContains('h1', 'Article test');
    }
}
