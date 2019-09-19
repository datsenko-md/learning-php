<?php

namespace Php\Hexlet\OOPBasics\Tests;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Rational;

class RationalTest extends TestCase
{
    public function testRational()
    {
        $rat = new Rational(3, 4);
        
        $this->assertEquals(3, $rat->getNumer());
        $this->assertEquals(4, $rat->getDenom());
    }
    
    public function testAddAndSub()
    {
        $rat1 = new Rational(1, 2);
        $rat2 = new Rational(1, 3);
        
        $rat3 = $rat1->add($rat2);
        $this->assertEquals(5, $rat3->getNumer());
        $this->assertEquals(6, $rat3->getDenom());
        
        $rat4 = $rat2->sub($rat1);
        $this->assertEquals(-1, $rat4->getNumer());
        $this->assertEquals(6, $rat4->getDenom());
    }
}
