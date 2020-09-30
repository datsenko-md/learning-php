<?php

namespace Tests\Arrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Lessons\CalculateAverage\calculateAverage;

class CalculateAverageTest extends TestCase
{
    public function testCalculateAverage()
    {
        $this->assertEquals(null, calculateAverage([]));
        $this->assertEquals(3.5, calculateAverage([1, 4, 6, 3]));
        $this->assertEquals(0, calculateAverage([0]));
    }
}
