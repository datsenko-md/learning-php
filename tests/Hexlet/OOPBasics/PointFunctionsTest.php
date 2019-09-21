<?php

namespace Tests\Hexlet\OOPBasics;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Point;
use function Php\Hexlet\OOPBasics\PointFunctions\getMidpoint;
use function Php\Hexlet\OOPBasics\PointFunctions\dup;

class PointFunctionsTest extends TestCase
{
    public function testMidPoint()
    {
        $point1 = new Point(10, 1);
        $point2 = new Point(1, 10);
        
        $midpoint = getMidpoint($point1, $point2);
        $this->assertEquals(5.5, $midpoint->getX());
        $this->assertEquals(5.5, $midpoint->getY());
    }
    
    public function testDup()
    {
        $p1 = new Point(3, 5);
        $p2 = dup($p1);
        
        $this->assertEquals(3, $p2->getX());
        $this->assertEquals(5, $p2->getY());
    }
}
