<?php

namespace Tests\OOPBasics\Challenges;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Challenges\SquaresGenerator;
use App\OOPBasics\Challenges\Square;

class SquaresGeneratorTest extends TestCase
{
    public function testSquaresGenerator()
    {
        $expected = [new Square(3), new Square(3), new Square(3), new Square(3), new Square(3)];
        $this->assertEquals($expected, SquaresGenerator::generate(3));
        
        $expected2 = [new Square(4), new Square(4)];
        $actual2 = SquaresGenerator::generate(4, 2);
        $this->assertEquals($expected2, $actual2);
        $this->assertNotSame($actual2[0], $actual2[1]);
    }
}
