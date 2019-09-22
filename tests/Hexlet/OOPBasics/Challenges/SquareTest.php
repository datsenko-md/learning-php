<?php

namespace Tests\Hexlet\OOPBasics\Challenges;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Challenges\Square;

class SquareTest extends TestCase
{
    public function testSquare()
    {
        $side = 10;
        $square = new Square($side);
        $this->assertEquals($side, $square->getSide());
    }
}
