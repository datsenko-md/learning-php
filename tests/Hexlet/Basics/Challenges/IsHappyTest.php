<?php

namespace Tests\Hexlet\Basics\Challenges;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Basics\Challenges\IsHappy\isHappy;

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
