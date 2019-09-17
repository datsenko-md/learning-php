<?php

namespace Php\Hexlet\DataAbstractions\Points;

function makeDecartPoint($x, $y)
{
    return [
        'angle' => atan2($y, $x),
        'radius' => sqrt($x ** 2 + $y ** 2)
    ];
}

function getAngle($point)
{
    return $point['angle'];
}

function getRadius($point)
{
    return $point['radius'];
}

function getX($point)
{
    return getRadius($point) * cos(getAngle($point));
}

function getY($point)
{
    return getRadius($point) * sin(getAngle($point));
}
