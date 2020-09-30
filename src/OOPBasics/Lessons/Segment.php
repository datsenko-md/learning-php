<?php

namespace App\OOPBasics\Lessons;

use App\OOPBasics\Lessons\Point;

class Segment
{
    private $beginPoint;
    private $endPoint;
    
    public function __construct(Point $beginPoint, Point $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }
    
    public function __toString()
    {
        return "[{$this->beginPoint}, {$this->endPoint}]";
    }
    
    public function getBeginPoint()
    {
        return $this->beginPoint;
    }
    
    public function getEndPoint()
    {
        return $this->endPoint;
    }
}
