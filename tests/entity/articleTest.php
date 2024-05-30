<?php

namespace App\Tests\Entity;

use App\Entity\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase 
{
    public function testPageEntity()
    {
        $page = new Article();
        $page->setTitle('Article test');
        $page->setSlug('article-test');
        $page->setContent("Ceci est un test pour l'entité article.");
        $page->setCategory('Test');

        $this->assertSame('Article test', $page->getTitle());
        $this->assertSame('article-test', $page->getSlug());
        $this->assertSame("Ceci est un test pour l'entité article.", $page->getContent());
        $this->assertSame('Test', $page->getCategory());
    }
}