<?php

namespace Php\Hexlet\Arrays\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\IsPowerOfThree\isPowerOfThree;

class IsPowerOfThreeTest extends TestCase
{
    public function testIsPowerOfThree()
    {
        $this->assertTrue(isPowerOfThree(1));
        $this->assertTrue(isPowerOfThree(27));
        $this->assertFalse(isPowerOfThree(82));
    }
}
