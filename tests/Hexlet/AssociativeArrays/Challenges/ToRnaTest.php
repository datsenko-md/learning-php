<?php

namespace Tests\Hexlet\AssociativeArrays\Challenges;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\AssociativeArrays\Challenges\ToRna\toRna;

class ToRnaTest extends TestCase
{
    public function testToRna()
    {
        $actual = toRna('ACGTGGTCTTAA');
        $expected = 'UGCACCAGAAUU';
        $this->assertEquals($expected, $actual);
    }
}
