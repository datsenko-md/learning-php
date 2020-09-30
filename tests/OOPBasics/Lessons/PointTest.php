<?php

namespace Tests\OOPBasics\Lessons;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Lessons\Point;

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
