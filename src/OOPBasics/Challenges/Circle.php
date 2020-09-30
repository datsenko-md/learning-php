<?php

namespace App\OOPBasics\Challenges;

class Circle
{
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    public function getArea()
    {
        return pi() * ($this->radius ** 2);
    }
    
    public function getCircumference()
    {
        return 2 * pi() * $this->radius;
    }
}
