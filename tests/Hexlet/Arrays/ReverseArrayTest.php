<?php

namespace Learning\Php\Hexlet\Tests;

use PHPUnit\Framework\TestCase;
use function Learning\Php\Hexlet\ReverseArray\reverseArray;

class ReverseArrayTest extends TestCase
{
    public function testReverseArray()
    {
        $arr1 = [1, 2, 3, 4, 5];
        $arr2 = [1, 2, 3, 4, 5, 6];
        
        $this->assertEquals(array_reverse($arr1), reverseArray($arr1));
        $this->assertEquals(array_reverse($arr2), reverseArray($arr2));
    }
}
