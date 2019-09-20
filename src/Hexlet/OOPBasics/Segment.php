<?php

namespace Php\Hexlet\OOPBasics;

use Php\Hexlet\OOPBasics\Point;

class Segment
{
    private $beginPoint;
    private $endPoint;
    
    public function __construct(Point $beginPoint, Point $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
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
