<?php

namespace Tests\DataAbstractions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\DataAbstractions\Lessons\Rational\makeRational;
use function App\DataAbstractions\Lessons\Rational\getNumer;
use function App\DataAbstractions\Lessons\Rational\getDenom;
use function App\DataAbstractions\Lessons\Rational\ratToString;
use function App\DataAbstractions\Lessons\Rational\add;
use function App\DataAbstractions\Lessons\Rational\sub;

class RationalTest extends TestCase
{
    public function testRational()
    {
        $a = makeRational(10, 20);
        $this->assertEquals(1, getNumer($a));
        $this->assertEquals(2, getDenom($a));
    }
    
    public function testRatToString()
    {
        $a = makeRational(10, 20);
        $this->assertEquals('1/2', ratToString($a));
    }
    
    public function testAddAndSub()
    {
        $a = makeRational(10, 20);
        $b = makeRational(1, 3);
        
        $sum = makeRational(5, 6);
        $diff = makeRational(1, 6);
        
        $this->assertEquals($sum, add($a, $b));
        $this->assertEquals($diff, sub($a, $b));
    }
}
