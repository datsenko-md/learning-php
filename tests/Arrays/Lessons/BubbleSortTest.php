<?php

namespace Tests\Arrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Lessons\BubbleSort\bubbleSort;

class BubbleSortTest extends TestCase
{
    public function testBubbleSort()
    {
        $data1 = [3, 5, 4, 2, 1];
        $actual1 = bubbleSort($data1);
        $expected1 = [1, 2, 3, 4, 5];
        $this->assertEquals($expected1, $actual1);
        
        $data2 = [2, 1, 2, 3, 5, -3, 0];
        $actual2 = bubbleSort($data2);
        $expected2 = [-3, 0, 1, 2, 2, 3, 5];
        $this->assertEquals($expected2, $actual2);
        
        $data3 = [];
        $actual3 = bubbleSort($data3);
        $expected3 = [];
        $this->assertEquals($expected3, $actual3);
    }
}
