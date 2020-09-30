<?php

namespace Tests\DataAbstractions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\DataAbstractions\Lessons\Points\makeDecartPoint;
use function App\DataAbstractions\Lessons\Points\getX;
use function App\DataAbstractions\Lessons\Points\getY;
use function App\DataAbstractions\Lessons\Points\getQuadrant;

class PointsTest extends TestCase
{
    public function testPoints()
    {
        $p = makeDecartPoint(3, 5);
        $x = getX($p);
        $y = getY($p);
        
        $this->assertEquals(3, $x);
        $this->assertEquals(5, $y);
    }
    
    public function testGetQuadrant()
    {
        $p1 = makeDecartPoint(3, 5);
        $this->assertEquals(1, getQuadrant($p1));
        
        $p2 = makeDecartPoint(-3, 5);
        $this->assertEquals(2, getQuadrant($p2));

        $p3 = makeDecartPoint(-3, -5);
        $this->assertEquals(3, getQuadrant($p3));

        $p4 = makeDecartPoint(3, -5);
        $this->assertEquals(4, getQuadrant($p4));
        
        $p5 = makeDecartPoint(0, 0);
        $this->assertNull(getQuadrant($p5));
    }
}
