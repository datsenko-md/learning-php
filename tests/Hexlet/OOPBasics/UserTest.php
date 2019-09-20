<?php

namespace Php\Hexlet\OOPBasics\Tests;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\User;

class UserTest extends TestCase
{
    public function testUser()
    {
        $user = new User(5, 'Tom');
        
        $this->assertEquals(5, $user->getId());
        $this->assertEquals('Tom', $user->getName());
    }
}
