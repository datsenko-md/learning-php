<?php

namespace Tests\DataAbstractions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\DataAbstractions\Lessons\Segments\makeSegment;
use function App\DataAbstractions\Lessons\Segments\getStartPoint;
use function App\DataAbstractions\Lessons\Segments\getEndPoint;
use function App\DataAbstractions\Lessons\Segments\getMidpointOfSegment;
use function App\DataAbstractions\Lessons\Points\makeDecartPoint;

class SegmentsTest extends TestCase
{
    public function testMakeSegment()
    {
        $startPoint = makeDecartPoint(3, 4);
        $endPoint = makeDecartPoint(7, 8);
        $segment = makeSegment($startPoint, $endPoint);
        
        $this->assertEquals($startPoint, getStartPoint($segment));
        $this->assertEquals($endPoint, getEndPoint($segment));
    }
    
    public function testGetMidpointOfSegment()
    {
        $startPoint = makeDecartPoint(3, 4);
        $endPoint = makeDecartPoint(7, 8);
        $segment = makeSegment($startPoint, $endPoint);
        
        $midPoint = makeDecartPoint(5, 6);
        $this->assertEquals($midPoint, getMidPointOfSegment($segment));
    }
}
