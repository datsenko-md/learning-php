<?php

namespace Php\Hexlet\Functions\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Functions\Union\union;

class UnionTest extends TestCase
{
    public function testUnion()
    {
        $this->assertEquals([], union([]));
        $this->assertEquals([], union([], []));
        $this->assertEquals([], union([], [], []));
        
        $this->assertEquals([2], union([2]));
        $this->assertEquals([1, 2, 3], union([1, 2, 3], [3, 2, 1]));
        $this->assertEquals(['a', 3, false, true, 5, 8], union(['a', 3, false], [true, false, 3], [false, 5, 8]));
    }
}
