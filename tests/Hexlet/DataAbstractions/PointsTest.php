<?php

namespace Php\Hexlet\DataAbstractions\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\DataAbstractions\Points\makeDecartPoint;
use function Php\Hexlet\DataAbstractions\Points\getX;
use function Php\Hexlet\DataAbstractions\Points\getY;

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
}
