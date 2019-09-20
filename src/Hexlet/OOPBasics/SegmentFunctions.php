<?php

namespace Php\Hexlet\OOPBasics\SegmentFunctions;

use Php\Hexlet\OOPBasics\Segment;
use Php\Hexlet\OOPBasics\Point;

function reverse(Segment $segment)
{
    $startP = $segment->beginPoint;
    $endP = $segment->endPoint;
    
    $beginPoint = new Point($endP->getX(), $endP->getY());
    $endPoint = new Point($startP->getX(), $startP->getY());
    
    return new Segment($beginPoint, $endPoint);
}
