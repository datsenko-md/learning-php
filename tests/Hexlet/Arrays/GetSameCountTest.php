<?php

namespace Php\Hexlet\Basics\Challenges\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Basics\Arrays\GetSameCount\getSameCount;

class GetSameCountTest extends TestCase
{
    public function testGetSameCount()
    {
        $actual1 = getSameCount([], []);
        $this->assertEquals(0, $actual1);
        
        $actual2 = getSameCount([1, 2, 3], []);
        $this->assertEquals(0, $actual2);
        
        $actual3 = getSameCount([1, 2, 3], [4, 5, 6]);
        $this->assertEquals(0, $actual3);
        
        $actual4 = getSameCount([1, 2, 3], ['a', 'b', 'c']);
        $this->assertEquals(0, $actual4);
        
        $actual5 = getSameCount([1, 2, 3], [3, 4, 5]);
        $this->assertEquals(1, $actual5);
        
        $actual6 = getSameCount([1, 2, 3, 4], [4, 3]);
        $this->assertEquals(2, $actual6);
        
        $actual7 = getSameCount([1, 2, 3, 3, 4, 4], [4, 3, 3]);
        $this->assertEquals(2, $actual7);
    }
}
