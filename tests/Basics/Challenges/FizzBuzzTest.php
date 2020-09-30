<?php

namespace Tests\Basics\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Basics\Challenges\FizzBuzz\fizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz()
    {
        $actual1 = fizzBuzz(11, 20);
        $expected1 = '11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz';
        $this->assertEquals($expected1, $actual1);
        
        $actual2 = fizzBuzz(7, 3);
        $expected2 = '';
        $this->assertEquals($expected2, $actual2);
        
        $actual3 = fizzBuzz(1, 2);
        $expected3 = '1 2';
        $this->assertEquals($expected3, $actual3);
    }
}
