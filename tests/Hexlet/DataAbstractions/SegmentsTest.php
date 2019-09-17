<?php

namespace Php\Hexlet\DataAbstractions\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\DataAbstractions\Segments\makeSegment;
use function Php\Hexlet\DataAbstractions\Segments\getStartPoint;
use function Php\Hexlet\DataAbstractions\Segments\getEndPoint;
use function Php\Hexlet\DataAbstractions\Segments\getMidpointOfSegment;
use function Php\Hexlet\DataAbstractions\Points\makeDecartPoint;

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
