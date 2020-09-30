<?php

namespace App\DataAbstractions\Lessons\Rectangle;

use function App\DataAbstractions\Lessons\Points\makeDecartPoint;
use function App\DataAbstractions\Lessons\Points\getX;
use function App\DataAbstractions\Lessons\Points\getY;
use function App\DataAbstractions\Lessons\Points\getQuadrant;

function makeRectangle($startPoint, $width, $height)
{
    return [
        'startPoint' => $startPoint,
        'width' => $width,
        'height' => $height
    ];
}

function getStartPoint($rectangle)
{
    return $rectangle['startPoint'];
}

function getWidth($rectangle)
{
    return $rectangle['width'];
}

function getHeight($rectangle)
{
    return $rectangle['height'];
}

function containsOrigin($rectangle)
{
    $point1 = getStartPoint($rectangle);
    $point2 = makeDecartPoint(getX($point1) + getWidth($rectangle), getY($point1) - getHeight($rectangle));
    
    return getQuadrant($point1) === 2 && getQuadrant($point2) === 4;
}
