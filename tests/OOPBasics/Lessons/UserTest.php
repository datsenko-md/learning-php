<?php

namespace Tests\OOPBasics\Lessons;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Lessons\User;

class UserTest extends TestCase
{
    public function testUser()
    {
        $user = new User(5, 'Tom');
        
        $this->assertEquals(5, $user->getId());
        $this->assertEquals('Tom', $user->getName());
    }
}
