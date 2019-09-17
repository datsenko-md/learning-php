<?php

namespace Php\Hexlet\DataAbstractions\Rectangle;

use function Php\Hexlet\DataAbstractions\Points\makeDecartPoint;
use function Php\Hexlet\DataAbstractions\Points\getX;
use function Php\Hexlet\DataAbstractions\Points\getY;
use function Php\Hexlet\DataAbstractions\Points\getQuadrant;

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
