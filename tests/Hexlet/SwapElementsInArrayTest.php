<?php

namespace Learning\Php\Hexlet\Tests;

use PHPUnit\Framework\TestCase;
use function Learning\Php\Hexlet\SwapElementsInArray\swapElementsInArray;

class SwapElementsInArrayTest extends TestCase
{
    public function testSwapElementsInArray()
    {
        $names = ["Bob", "Carl", "David"];
        
        $this->assertEquals(array_reverse($names), swapElementsInArray($names, 1));
        $this->assertEquals($names, swapElementsInArray($names, 0));
        $this->assertEquals($names, swapElementsInArray($names, 2));
    }
}
