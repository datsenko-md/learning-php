<?php

namespace Tests\Hexlet\DataAbstractions;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\DataAbstractions\CalculateDistance\calculateDistance;

class CalculateDistanceTest extends TestCase
{
    public function testCalculateDistance()
    {
        $point1 = [0, 0];
        $point2 = [3, 4];
        $this->assertEquals(5, calculateDistance($point1, $point2));
    }
}
