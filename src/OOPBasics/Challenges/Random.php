<?php

namespace App\OOPBasics\Challenges;

class Random
{
    private $a = 106;
    private $c = 1283;
    private $m = 6075;
    private $x;
    private $beginValue;
    
    public function __construct($beginValue)
    {
        $this->beginValue = $beginValue;
        $this->x = $beginValue;
    }
    
    public function getNext()
    {
        $a = $this->a;
        $c = $this->c;
        $m = $this->m;
        $x = $this->x;
        $next = (($a * $x) + $c) % $m;
        
        $this->x = $next;
        return $next;
    }
    
    public function reset()
    {
        $this->x = $this->beginValue;
    }
}
