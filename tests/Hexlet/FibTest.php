<?php

namespace Learning\Php\Hexlet\Tests;

use PHPUnit\Framework\TestCase;
use function Learning\Php\Hexlet\Fib\fib;

class FibTest extends TestCase
{
    /**
    * @dataProvider additionProvider
    */
    
    public function testFib($value, $num)
    {
        $this->assertEquals($value, fib($num));
    }
    
    public function testFib2($value, $num)
    {
        $this->assertEquals($value, fib($num));
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
