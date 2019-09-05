<?php

namespace Php\Hexlet\Arrays\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\CalculateAverage\calculateAverage;

class CalculateAverageTest extends TestCase
{
    public function testCalculateAverage()
    {
        $this->assertEquals(null, calculateAverage([]));
        $this->assertEquals(3.5, calculateAverage([1, 4, 6, 3]));
        $this->assertEquals(0, calculateAverage([0]));
    }
}
