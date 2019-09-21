<?php

namespace Tests\Hexlet\Functions;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Functions\GetGirlFriends\getGirlFriends;

class GetGirlFriendsTest extends TestCase
{
    public function testGetGirlFriends()
    {
        $users = [
            ['name' => 'Tirion', 'friends' => [
                ['name' => 'Mira', 'gender' => 'female'],
                ['name' => 'Ramsey', 'gender' => 'male']
            ]],
            ['name' => 'Bronn', 'friends' => []],
            ['name' => 'Sam', 'friends' => [
                ['name' => 'Aria', 'gender' => 'female'],
                ['name' => 'Keit', 'gender' => 'female']
            ]],
            ['name' => 'Rob', 'friends' => [
                ['name' => 'Taywin', 'gender' => 'male']
            ]],
        ];
        
        $actual = getGirlFriends($users);
        
        $expected = [
            ['name' => 'Mira', 'gender' => 'female'],
            ['name' => 'Aria', 'gender' => 'female'],
            ['name' => 'Keit', 'gender' => 'female']
        ];

        $this->assertEquals($expected, $actual);
    }
}
