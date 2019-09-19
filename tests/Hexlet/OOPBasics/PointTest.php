<?php

namespace Php\Hexlet\OOPBasics\Tests;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Point;

class PointTest extends TestCase
{
    public function testPoint()
    {
        $point = new Point();
        $point->x = 5;
        $point->y = 10;
        
        $this->assertEquals(5, $point->x);
        $this->assertEquals(10, $point->y);
    }
}
