<?php

namespace Php\Hexlet\OOPBasics;

class Time
{
    private $h;
    private $m;
    
    public function __construct($h, $m)
    {
        $this->h = $h;
        $this->m = $m;
    }
    
    public function __toString()
    {
        return "{$this->h}:{$this->m}";
    }
    
    public static function fromString($time)
    {
        [$h, $m] = explode(':', $time);
        
        return new self($h, $m);
    }
}
