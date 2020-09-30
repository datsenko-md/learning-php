<?php

namespace App\DataAbstractions\Lessons\Segments;

use function App\DataAbstractions\Lessons\Points\makeDecartPoint;
use function App\DataAbstractions\Lessons\Points\getX;
use function App\DataAbstractions\Lessons\Points\getY;

function makeSegment($startPoint, $endPoint)
{
    return [
        'startPoint' => $startPoint,
        'endPoint' => $endPoint
    ];
}

function getStartPoint($segment)
{
    return $segment['startPoint'];
}

function getEndPoint($segment)
{
    return $segment['endPoint'];
}

function getMidpointOfSegment($segment)
{
    $startPoint = getStartPoint($segment);
    $endPoint = getEndPoint($segment);
    
    $x = (getX($startPoint) + getX($endPoint)) / 2;
    $y = (getY($startPoint) + getY($endPoint)) / 2;
    return makeDecartPoint($x, $y);
}
