<?php

namespace Php\Hexlet\OOPBasics\SegmentFunctions;

use Php\Hexlet\OOPBasics\Segment;
use Php\Hexlet\OOPBasics\Point;

function reverse(Segment $segment)
{
    $startP = $segment->beginPoint;
    $endP = $segment->endPoint;
    
    $beginPoint = new Point($endP->x, $endP->y);
    $endPoint = new Point($startP->x, $startP->y);
    
    return new Segment($beginPoint, $endPoint);
}
