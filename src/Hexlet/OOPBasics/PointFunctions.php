<?php

namespace Php\Hexlet\OOPBasics\PointFunctions;

use Php\Hexlet\OOPBasics\Point;

function getMidpoint(Point $point1, Point $point2)
{
    $midPoint = new Point();
    $midPoint->x = ($point1->x + $point2->x) / 2;
    $midPoint->y = ($point1->y + $point2->y) / 2;
    
    return $midPoint;
}

function dup(Point $point)
{
    $x = $point->x;
    $y = $point->y;
    
    $duplicate = new Point();
    
    $duplicate->x = $x;
    $duplicate->y = $y;
    return $duplicate;
}
