<?php

namespace Tests\Hexlet\AssociativeArrays\Challenges;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\AssociativeArrays\Challenges\FromPairs\fromPairs;

class FromPairsTest extends TestCase
{
    public function testFromPairs()
    {
        $actual = fromPairs([['cat', 5], ['dog', 6], ['cat', 11]]);
        $expected = ['dog' => 6, 'cat' => 11];
        $this->assertEquals($expected, $actual);
    }
}
