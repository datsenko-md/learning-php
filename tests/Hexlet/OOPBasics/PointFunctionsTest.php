<?php

namespace Php\Hexlet\OOPBasics\Tests;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Point;
use function Php\Hexlet\OOPBasics\PointFunctions\getMidpoint;
use function Php\Hexlet\OOPBasics\PointFunctions\dup;

class PointFunctionsTest extends TestCase
{
    public function testMidPoint()
    {
        $point1 = new Point();
        $point1->x = 10;
        $point1->y = 1;
        
        $point2 = new Point();
        $point2->x = 1;
        $point2->y = 10;
        
        $midpoint = getMidpoint($point1, $point2);
        $this->assertEquals(5.5, $midpoint->x);
        $this->assertEquals(5.5, $midpoint->y);
    }
    
    public function testDup()
    {
        $p1 = new Point();
        $p1->x = 3;
        $p1->y = 5;
        
        $p2 = dup($p1);
        
        $this->assertEquals(3, $p2->x);
        $this->assertEquals(5, $p2->y);
    }
}
