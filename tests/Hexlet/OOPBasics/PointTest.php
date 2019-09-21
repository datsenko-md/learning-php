<?php

namespace Tests\Hexlet\OOPBasics;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Point;

class PointTest extends TestCase
{
    public function testPoint()
    {
        $point = new Point(5, 10);
        
        $this->assertEquals(5, $point->getX());
        $this->assertEquals(10, $point->getY());
        $this->assertEquals('(5, 10)', "{$point}");
    }
}
