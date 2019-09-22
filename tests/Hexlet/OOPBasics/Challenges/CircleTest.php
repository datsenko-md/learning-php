<?php

namespace Tests\Hexlet\OOPBasics\Challenges;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Challenges\Circle;

class CircleTest extends TestCase
{
    public function testCircle()
    {
        $radius = 10;
        $area = pi() * ($radius ** 2);
        $circumference = 2 * pi() * $radius;
        
        $circle = new Circle($radius);
        
        $this->assertEquals($radius, $circle->getRadius());
        $this->assertEquals($area, $circle->getArea());
        $this->assertEquals($circumference, $circle->getCircumference());
    }
}
