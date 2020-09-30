<?php

namespace Tests\Functions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Functions\Lessons\Average\average;

class AverageTest extends TestCase
{
    public function testAverage()
    {
        $this->assertEquals(5, average(5));
        $this->assertEquals(6, average(5, 6, 7));
        $this->assertNull(average());
    }
}
