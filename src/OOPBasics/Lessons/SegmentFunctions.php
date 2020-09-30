<?php

namespace App\OOPBasics\Lessons\SegmentFunctions;

use App\OOPBasics\Lessons\Segment;
use App\OOPBasics\Lessons\Point;

function reverse(Segment $segment)
{
    $startP = $segment->getBeginPoint();
    $endP = $segment->getEndPoint();
    
    $beginPoint = new Point($endP->getX(), $endP->getY());
    $endPoint = new Point($startP->getX(), $startP->getY());
    
    return new Segment($beginPoint, $endPoint);
}
