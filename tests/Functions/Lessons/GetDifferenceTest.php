<?php

namespace Tests\Functions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Functions\Lessons\GetDifference\getDifference;

class GetDifferenceTest extends TestCase
{
    public function testGetDifference()
    {
        $this->assertEquals([1], getDifference([2, 1], [2, 3]));
    }
}
