<?php

namespace Php\Hexlet\OOPBasics;

class Point
{
    public static $table = 'points';
    
    private $x;
    private $y;
    
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function __toString()
    {
        return "({$this->x}, {$this->y})";
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
