<?php

namespace Tests\Arrays\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Challenges\CalcInPolishNotation\calcInPolishNotation;

class CalcInPolishNotationTest extends TestCase
{
    public function testCalcInPolishNotation()
    {
        $this->assertEquals(15, calcInPolishNotation([1, 2, '+', 4, '*', 3, '+']));
        $this->assertEquals(1, calcInPolishNotation([7, 2, 3, '*', '-']));
    }
}
