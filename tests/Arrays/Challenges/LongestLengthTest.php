<?php

namespace Tests\Arrays\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Challenges\LongestLength\longestLength;

class LongestLengthTest extends TestCase
{
    public function testLongestLength()
    {
        $this->assertEquals(5, longestLength('abcdeef'));
        $this->assertEquals(7, longestLength('jabjcdel'));
    }
}
