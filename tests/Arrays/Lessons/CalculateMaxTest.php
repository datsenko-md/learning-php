<?php

namespace Tests\Arrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Lessons\CalculateMax\calculateMax;

class CalculateMaxTest extends TestCase
{
    public function testCalculateMax()
    {
        $this->assertEquals(null, calculateMax([]));
        $this->assertEquals(6, calculateMax([1, 4, 6, 3]));
        $this->assertEquals(0, calculateMax([0]));
    }
}
