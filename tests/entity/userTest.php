<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserEntity()
    {
        $user = new User();
        $user->setEmail('user@example.com');
        $user->setPassword('password');

        $this->assertSame('user@example.com', $user->getEmail());
        $this->assertSame('password', $user->getPassword());
    }
}
