<?php

namespace Php\Hexlet\OOPBasics;

use Php\Hexlet\OOPBasics\Point;

class Segment
{
    public $beginPoint;
    public $endPoint;
    
    public function __construct(Point $beginPoint, Point $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }
}
