<?php

namespace Tests\Hexlet\OOPBasics;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Segment;
use Php\Hexlet\OOPBasics\Point;
use function Php\Hexlet\OOPBasics\SegmentFunctions\reverse;

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
