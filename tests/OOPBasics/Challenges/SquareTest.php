<?php

namespace Tests\OOPBasics\Challenges;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Challenges\Square;

class SquareTest extends TestCase
{
    public function testSquare()
    {
        $side = 10;
        $square = new Square($side);
        $this->assertEquals($side, $square->getSide());
    }
}
