<?php

namespace Tests\Basics\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Basics\Challenges\IsPowerOfThree\isPowerOfThree;

class IsPowerOfThreeTest extends TestCase
{
    public function testIsPowerOfThree()
    {
        $this->assertTrue(isPowerOfThree(1));
        $this->assertTrue(isPowerOfThree(27));
        $this->assertFalse(isPowerOfThree(82));
    }
}
