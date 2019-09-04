<?php

namespace Learning\Php\Hexlet\Tests;

use PHPUnit\Framework\TestCase;
use function Learning\Php\Hexlet\CalculateMax\сalculateMax;

class CalculateMaxTest extends TestCase
{
    public function testCalculateMax()
    {
        $this->assertEquals(null, сalculateMax([]));
        $this->assertEquals(6, сalculateMax([1, 4, 6, 3]));
        $this->assertEquals(0, сalculateMax([0]));
    }
}
