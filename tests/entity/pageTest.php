<?php

namespace App\Tests\Entity;

use App\Entity\Page;
use PHPUnit\Framework\TestCase;

class PageTest extends TestCase 
{
    public function testPageEntity()
    {
        $page = new Page();
        $page->setTitle('Page test');
        $page->setSlug('page-test');
        $page->setContent("Ceci est un test pour l'entité page.");
        $page->setCategory('Home');

        $this->assertSame('Page test', $page->getTitle());
        $this->assertSame('page-test', $page->getSlug());
        $this->assertSame("Ceci est un test pour l'entité page.", $page->getContent());
        $this->assertSame('Home', $page->getCategory());
        


    }
}