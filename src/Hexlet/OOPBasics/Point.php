<?php

namespace Php\Hexlet\OOPBasics;

class Point
{
    public $x;
    public $y;
    
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getX()
    {
        return $this->x;
    }
    
    public function getY()
    {
        return $this->y;
    }
}
