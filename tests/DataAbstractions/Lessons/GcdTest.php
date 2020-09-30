<?php

namespace Tests\DataAbstractions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\DataAbstractions\Lessons\Gcd\gcd;

class GcdTest extends TestCase
{
    public function testGcd()
    {
        $this->assertEquals(4, gcd(12, 8));
        $this->assertEquals(1, gcd(13, 8));
    }
}
