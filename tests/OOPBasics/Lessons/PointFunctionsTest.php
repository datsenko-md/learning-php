<?php

namespace Tests\OOPBasics\Lessons;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Lessons\Point;

use function App\OOPBasics\Lessons\PointFunctions\getMidpoint;
use function App\OOPBasics\Lessons\PointFunctions\dup;

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
