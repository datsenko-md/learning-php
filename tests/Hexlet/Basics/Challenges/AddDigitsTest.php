<?php

namespace Php\Hexlet\Basics\Challenges\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Basics\Challenges\AddDigits\addDigits;

class AddDigitsTest extends TestCase
{
    public function testAddDigits()
    {
        $this->assertEquals(5, addDigits(5));
        $this->assertEquals(1, addDigits(10));
        $this->assertEquals(2, addDigits(38));
    }
}
