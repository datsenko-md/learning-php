<?php

namespace Php\Hexlet\DataAbstractions\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\DataAbstractions\Points\makeDecartPoint;
use function Php\Hexlet\DataAbstractions\Points\getX;
use function Php\Hexlet\DataAbstractions\Points\getY;
use function Php\Hexlet\DataAbstractions\Points\getQuadrant;

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
