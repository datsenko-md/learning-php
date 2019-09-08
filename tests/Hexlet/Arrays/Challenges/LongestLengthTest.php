<?php

namespace Php\Hexlet\Arrays\Challenges\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\Challenges\LongestLength\longestLength;

class LongestLengthTest extends TestCase
{
    public function testLongestLength()
    {
        $this->assertEquals(5, longestLength('abcdeef'));
        $this->assertEquals(7, longestLength('jabjcdel'));
    }
}
