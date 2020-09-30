<?php

namespace Tests\AssociativeArrays\Challenges;

use PHPUnit\Framework\TestCase;

use function App\AssociativeArrays\Challenges\FromPairs\fromPairs;

class FromPairsTest extends TestCase
{
    public function testFromPairs()
    {
        $actual = fromPairs([['cat', 5], ['dog', 6], ['cat', 11]]);
        $expected = ['dog' => 6, 'cat' => 11];
        $this->assertEquals($expected, $actual);
    }
}
