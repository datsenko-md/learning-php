<?php

namespace Php\Hexlet\OOPBasics\PointFunctions;

use Php\Hexlet\OOPBasics\Point;

function getMidpoint(Point $point1, Point $point2)
{
    $x = ($point1->x + $point2->x) / 2;
    $y = ($point1->y + $point2->y) / 2;
    
    $midPoint = new Point($x, $y);
    
    return $midPoint;
}

function dup(Point $point)
{
    $x = $point->x;
    $y = $point->y;
    
    $duplicate = new Point($x, $y);
    
    return $duplicate;
}
