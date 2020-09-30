<?php

namespace Tests\Arrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Lessons\GetIntersectionOfSortedArray\getIntersectionOfSortedArray;

class GetIntersectionOfSortedArrayTest extends TestCase
{
    public function testGetIntersectionOfSortedArray()
    {
        $actual1 = getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]);
        $expected1 = [10, 24];
        $this->assertEquals($expected1, $actual1);
        
        $actual2 = getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4]);
        $expected2 = [];
        $this->assertEquals($expected2, $actual2);
        
        $actual3 = getIntersectionOfSortedArray([], [2]);
        $expected3 = [];
        $this->assertEquals($expected3, $actual3);
    }
}
