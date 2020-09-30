<?php

namespace Tests\Functions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Functions\Lessons\TakeOldest\takeOldest;

class TakeOldestTest extends TestCase
{
    public function testTakeOldest()
    {
        $users = [
            ['name' => 'Tirion', 'birthday' => '1988-11-19'],
            ['name' => 'Sam', 'birthday' => '1999-11-22'],
            ['name' => 'Rob', 'birthday' => '1975-01-11'],
            ['name' => 'Sansa', 'birthday' => '2001-03-20'],
            ['name' => 'Tisha', 'birthday' => '1992-02-27']
        ];
        
        $actual1 = takeOldest($users);
        $expected1 = [['name' => 'Rob', 'birthday' => '1975-01-11']];
        $this->assertEquals($expected1, $actual1);
        
        $actual2 = takeOldest($users, 2);
        $expected2 = [['name' => 'Rob', 'birthday' => '1975-01-11'],
                     ['name' => 'Tirion', 'birthday' => '1988-11-19']];
        $this->assertEquals($expected2, $actual2);
    }
}
