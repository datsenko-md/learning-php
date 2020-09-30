<?php

namespace Tests\OOPBasics\Lessons;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Lessons\Segment;
use App\OOPBasics\Lessons\Point;

class SegmentTest extends TestCase
{
    public function testSegment()
    {
        $point1 = new Point(3, 4);
        $point2 = new Point(10, 5);
        
        $segment = new Segment($point1, $point2);

        $this->assertEquals($point1, $segment->getBeginPoint());
        $this->assertEquals($point2, $segment->getEndPoint());
        $this->assertEquals('[(3, 4), (10, 5)]', "{$segment}");
    }
}
