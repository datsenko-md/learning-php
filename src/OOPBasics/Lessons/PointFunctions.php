<?php

namespace App\OOPBasics\Lessons\PointFunctions;

use App\OOPBasics\Lessons\Point;

function getMidpoint(Point $point1, Point $point2)
{
    $x = ($point1->getX() + $point2->getX()) / 2;
    $y = ($point1->getY() + $point2->getY()) / 2;
    
    $midPoint = new Point($x, $y);
    
    return $midPoint;
}

function dup(Point $point)
{
    $x = $point->getX();
    $y = $point->getY();
    
    $duplicate = new Point($x, $y);
    
    return $duplicate;
}
