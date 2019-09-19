<?php

namespace Php\Hexlet\OOPBasics\Tests;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\User;
use function Php\Hexlet\OOPBasics\UserFunctions\areUsersEqual;

class UserFunctionsTest extends TestCase
{
    public function testUserFunctions()
    {
        $user1 = new User();
        $user1->id = 3;
        
        $user2 = new User();
        $user2->id = 3;
        
        $user3 = new User();
        $user3->id = 5;
        
        $this->assertTrue(areUsersEqual($user1, $user2));
        $this->assertFalse(areUsersEqual($user1, $user3));
    }
}
