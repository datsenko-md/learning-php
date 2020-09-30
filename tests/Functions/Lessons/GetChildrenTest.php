<?php

namespace Tests\Functions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Functions\Lessons\GetChildren\getChildren;

class GetChildrenTest extends TestCase
{
    public function testGetChildren()
    {
        $users = [
            ['name' => 'Tirion', 'children' => [
                ['name' => 'Mira', 'birdhday' => '1983-03-23']
            ]],
            ['name' => 'Bronn', 'children' => []],
            ['name' => 'Sam', 'children' => [
                ['name' => 'Aria', 'birdhday' => '2012-11-03'],
                ['name' => 'Keit', 'birdhday' => '1933-05-14']
            ]],
            ['name' => 'Rob', 'children' => [
                ['name' => 'Tisha', 'birdhday' => '2012-11-03']
            ]],
        ];
        
        $actual = getChildren($users);
        $expected = [
            ['name' => 'Mira', 'birdhday' => '1983-03-23'],
            ['name' => 'Aria', 'birdhday' => '2012-11-03'],
            ['name' => 'Keit', 'birdhday' => '1933-05-14'],
            ['name' => 'Tisha', 'birdhday' => '2012-11-03'],
        ];
        $this->assertEquals($expected, $actual);
    }
}
