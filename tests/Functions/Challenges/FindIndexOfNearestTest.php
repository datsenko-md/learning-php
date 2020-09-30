<?php

namespace Tests\Functions\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Functions\Challenges\FindIndexOfNearest\findIndexOfNearest;

class FindIndexOfNearestTest extends TestCase
{
    public function testFindIndexOfNearest()
    {
        $this->assertNull(findIndexOfNearest([], 2));
        $this->assertEquals(2, findIndexOfNearest([15, 10, 3, 4, 3], 0));
    }
}
