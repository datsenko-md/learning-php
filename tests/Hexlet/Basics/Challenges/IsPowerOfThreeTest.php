<?php

namespace Tests\Hexlet\Basics\Challenges;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Basics\Challenges\IsPowerOfThree\isPowerOfThree;

class IsPowerOfThreeTest extends TestCase
{
    public function testIsPowerOfThree()
    {
        $this->assertTrue(isPowerOfThree(1));
        $this->assertTrue(isPowerOfThree(27));
        $this->assertFalse(isPowerOfThree(82));
    }
}
