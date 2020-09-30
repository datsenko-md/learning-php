<?php

namespace App\DataAbstractions\Lessons\CalculateDistance;

//function calculateDistance($point1, $point2)
//{
//    [$x1, $y1] = $point1;
//    [$x2, $y2] = $point2;
//    return sqrt(($x1 - $x2) ** 2 + ($y1 - $y2) ** 2);
//}

function calculateDistance($point1, $point2)
{
    $deltaX = $point1[0] - $point2[0];
    $deltaY = $point1[1] - $point2[1];
    return sqrt($deltaX ** 2 + $deltaY ** 2);
}
