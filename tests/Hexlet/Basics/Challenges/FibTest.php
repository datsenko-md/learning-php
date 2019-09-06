<?php

namespace Php\Hexlet\Basics\Challenges\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Basics\Challenges\Fib\fib;
use function Php\Hexlet\Basics\Challenges\Fib\fib2;

class FibTest extends TestCase
{
    /**
    * @dataProvider additionProvider
    */
    
    public function testFib($value, $num)
    {
        $this->assertEquals($value, fib($num));
        $this->assertEquals($value, fib2($num), "fib2");
    }
    
   
    
    public function additionProvider()
    {
        return [
            [0, 0],
            [1, 1],
            [2, 3],
            [5, 5],
            [55, 10]
        ];
    }
}
