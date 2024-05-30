<?php

namespace App\Tests\Security;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminAccessTest extends WebTestCase
{
    public function testAdminPageIsRestricted()
    {
        $client = static::createClient();
        $client->request('GET', '/admin');

        $this->assertResponseRedirects('/login');
    }
}
