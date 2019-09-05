<?php

namespace Learning\Php\Hexlet\IsPowerOfThree\Tests;

use PHPUnit\Framework\TestCase;
use function Learning\Php\Hexlet\IsPowerOfThree\isPowerOfThree;

class IsPowerOfThreeTest extends TestCase
{
    public function testIsPowerOfThree()
    {
        $this->assertTrue(isPowerOfThree(1));
        $this->assertTrue(isPowerOfThree(27));
        $this->assertFalse(isPowerOfThree(82));
    }
}
