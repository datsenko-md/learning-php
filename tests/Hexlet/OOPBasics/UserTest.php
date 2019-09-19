<?php

namespace Php\Hexlet\OOPBasics\Tests;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\User;

class UserTest extends TestCase
{
    public function testUser()
    {
        $user = new User();
        
        $user->id = 5;
        $user->name = 'Tom';
        
        $this->assertEquals(5, $user->id);
        $this->assertEquals('Tom', $user->name);
    }
}
