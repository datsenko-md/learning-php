<?php

namespace App\OOPBasics\Lessons;

class Rational
{
    public $numer;
    public $denom;
    
    public function __construct($numer, $denom)
    {
        $this->numer = $numer;
        $this->denom = $denom;
    }
    
    public function getNumer()
    {
        return $this->numer;
    }
    
    public function getDenom()
    {
        return $this->denom;
    }
    
    public function add(Rational $rat)
    {
        $numer = ($this->numer * $rat->denom) + ($rat->numer * $this->denom);
        $denom = $this->denom * $rat->denom;
        
        return new Rational($numer, $denom);
    }
    
    public function sub(Rational $rat)
    {
        $numer = ($this->numer * $rat->denom) - ($rat->numer * $this->denom);
        $denom = $this->denom * $rat->denom;
        
        return new Rational($numer, $denom);
    }
}
