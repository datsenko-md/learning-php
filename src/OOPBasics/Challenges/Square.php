<?php

namespace App\OOPBasics\Challenges;

class Square
{
    private $side;
    
    public function __construct($side)
    {
        $this->side = $side;
    }
    
    public function getSide()
    {
        return $this->side;
    }
}
