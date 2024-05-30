<?php

namespace App\Tests\Entity;

use App\Entity\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase 
{
    public function testPageEntity()
    {
        $article = new Article();
        $article->setTitle('Article test');
        $article->setSlug('article-test');
        $article->setContent("Ceci est un test pour l'entité article.");
        $article->setCategory('Test');

        $this->assertSame('Article test', $article->getTitle());
        $this->assertSame('article-test', $article->getSlug());
        $this->assertSame("Ceci est un test pour l'entité article.", $article->getContent());
        $this->assertSame('Test', $article->getCategory());
    }
}