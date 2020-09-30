<?php

namespace Tests\OOPBasics\Lessons;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Lessons\User;

use function App\OOPBasics\Lessons\UserFunctions\areUsersEqual;

class UserFunctionsTest extends TestCase
{
    public function testUserFunctions()
    {
        $user1 = new User(3, 'Mike');
        $user2 = new User(3, 'Tom');
        $user3 = new User(5, 'Mike');
        
        $this->assertTrue(areUsersEqual($user1, $user2));
        $this->assertFalse(areUsersEqual($user1, $user3));
    }
}
