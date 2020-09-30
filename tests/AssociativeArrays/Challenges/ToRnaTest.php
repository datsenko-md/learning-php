<?php

namespace Tests\AssociativeArrays\Challenges;

use PHPUnit\Framework\TestCase;

use function App\AssociativeArrays\Challenges\ToRna\toRna;

class ToRnaTest extends TestCase
{
    public function testToRna()
    {
        $actual = toRna('ACGTGGTCTTAA');
        $expected = 'UGCACCAGAAUU';
        $this->assertEquals($expected, $actual);
    }
}
