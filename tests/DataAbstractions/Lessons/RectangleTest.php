<?php

namespace Tests\DataAbstractions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\DataAbstractions\Lessons\Rectangle\makeRectangle;
use function App\DataAbstractions\Lessons\Rectangle\getStartPoint;
use function App\DataAbstractions\Lessons\Rectangle\getWidth;
use function App\DataAbstractions\Lessons\Rectangle\getHeight;
use function App\DataAbstractions\Lessons\Rectangle\containsOrigin;
use function App\DataAbstractions\Lessons\Points\makeDecartPoint;

class RectangleTest extends TestCase
{
    public function testMakeRectangle()
    {
        $p = makeDecartPoint(3, 4);
        $height = 5;
        $width = 7;
        
        $rect = makeRectangle($p, $width, $height);
        
        $this->assertEquals($p, getStartPoint($rect));
        $this->assertEquals($height, getHeight($rect));
        $this->assertEquals($width, getWidth($rect));
    }
    
    public function testContainsOrigin()
    {
        $p = makeDecartPoint(-3, 4);
        $height = 6;
        $width = 7;
        
        $rect = makeRectangle($p, $width, $height);
        $this->assertTrue(containsOrigin($rect));
        
        $p2 = makeDecartPoint(-3, 4);
        $height2 = 3;
        $width2 = 7;
        
        $rect2 = makeRectangle($p2, $width2, $height2);
        $this->assertFalse(containsOrigin($rect2));
    }
}
