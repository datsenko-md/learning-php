<?php

namespace Tests\Basics\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Basics\Challenges\IsHappy\isHappy;

class IsHappyTest extends TestCase
{
    public function testIsHappy()
    {
        $this->assertTrue(isHappy('11'));
        $this->assertTrue(isHappy('123321'));
        
        $this->assertFalse(isHappy('123341'));
        $this->assertFalse(isHappy('01'));
    }
}
