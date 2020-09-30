<?php

namespace Tests\DataAbstractions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\DataAbstractions\Lessons\CalculateDistance\calculateDistance;

class CalculateDistanceTest extends TestCase
{
    public function testCalculateDistance()
    {
        $point1 = [0, 0];
        $point2 = [3, 4];
        $this->assertEquals(5, calculateDistance($point1, $point2));
    }
}
