<?php

namespace Tests\Hexlet\Arrays;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\CalculateMax\calculateMax;

class CalculateMaxTest extends TestCase
{
    public function testCalculateMax()
    {
        $this->assertEquals(null, calculateMax([]));
        $this->assertEquals(6, calculateMax([1, 4, 6, 3]));
        $this->assertEquals(0, calculateMax([0]));
    }
}
