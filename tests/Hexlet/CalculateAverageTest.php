<?php

namespace Learning\Php\Hexlet\Tests;

use PHPUnit\Framework\TestCase;
use function Learning\Php\Hexlet\CalculateAverage\сalculateAverage;

class CalculateAverageTest extends TestCase
{
    public function testCalculateAverage()
    {
        $this->assertEquals(null, сalculateAverage([]));
        $this->assertEquals(3.5, сalculateAverage([1, 4, 6, 3]));
        $this->assertEquals(0, сalculateAverage([0]));
    }
}
