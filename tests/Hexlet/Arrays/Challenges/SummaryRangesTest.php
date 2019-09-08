<?php

namespace Php\Hexlet\Arrays\Challenges\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\Challenges\SummaryRanges\summaryRanges;

class SummaryRangesTest extends TestCase
{
    public function testSummaryRanges()
    {
        $this->assertEquals([], summaryRanges([]));
        $this->assertEquals([], summaryRanges([1]));
        $this->assertEquals(["1->3"], summaryRanges([1, 2, 3]));
        $this->assertEquals(["0->2", "4->5"], summaryRanges([0, 1, 2, 4, 5, 7]));
        $this->assertEquals(['110->112', '-5->-4'], summaryRanges([110, 111, 112, 111, -5, -4, -2, -3, -4, -5]));
    }
}
