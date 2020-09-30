<?php

namespace Tests\OOPBasics\Lessons;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Lessons\Segment;
use App\OOPBasics\Lessons\Point;

use function App\OOPBasics\Lessons\SegmentFunctions\reverse;

class SegmentFunctionsTest extends TestCase
{
    public function testReverse()
    {
        $beginPoint = new Point(3, 5);
        $endPoint = new Point(7, 4);
        
        $segment = new Segment($beginPoint, $endPoint);
        $reversedSegment = reverse($segment);
        
        $this->assertEquals($endPoint, $reversedSegment->getBeginPoint());
        $this->assertEquals($beginPoint, $reversedSegment->getEndPoint());
    }
}
