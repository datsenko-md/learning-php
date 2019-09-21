<?php

namespace Tests\Hexlet\Functions;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Functions\GetManWithLeastFriends\getManWithLeastFriends;

class GetManWithLeastFriendsTest extends TestCase
{
    public function testGetManWithLeastFriends()
    {
        $this->assertNull(getManWithLeastFriends([]));
        
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
            ['name' => 'Keit', 'friends' => []],
            ['name' => 'Rob', 'friends' => [
                ['name' => 'Taywin', 'gender' => 'male']
            ]],
        ];
        $actual = getManWithLeastFriends($users);
        $expected = ['name' => 'Keit', 'friends' => []];
        $this->assertEquals($expected, $actual);
    }
}
