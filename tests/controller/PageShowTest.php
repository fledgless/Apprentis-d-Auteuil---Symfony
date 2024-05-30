<?php

namespace App\Tests\Entity;

use App\Entity\Page;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;

class PageShowTest extends WebTestCase 
{
    private $entityManager;

    public function setUp(): void
    {
        self::ensureKernelShutdown();
        $client = static::createClient();
        $this->entityManager = $client->getContainer()->get('doctrine')->getManager();

        $page = new Page();
        $page->setTitle('Page test');
        $page->setSlug('page-test');
        $page->setContent("Ceci est un test pour l'entité page.");
        $page->setCategory('Home');
      
        $this->entityManager->persist($page);
        $this->entityManager->flush();
    }

    public function testShowPagePage()
    {
        self::ensureKernelShutdown();
        $client = static::createClient();
        $client->request('GET', '/home/page-test');

        $this->assertResponseIsSuccessful();
        $this->assertAnySelectorTextContains('h1', 'Page test');
    }
}
