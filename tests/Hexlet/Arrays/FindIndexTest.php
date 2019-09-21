<?php

namespace Tests\Hexlet\Arrays;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\FindIndex\findIndex;

class FindIndexTest extends TestCase
{
    public function testFindIndex()
    {
        $numbers = [5, 6, 1, 3 , 6, 4, 9, 7, 0];
        
        $this->assertEquals(5, findIndex($numbers, 4));
        $this->assertEquals(1, findIndex($numbers, 6));
        $this->assertEquals(-1, findIndex($numbers, 10));
    }
}
