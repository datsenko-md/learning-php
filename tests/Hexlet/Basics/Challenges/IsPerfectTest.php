<?php

namespace Php\Hexlet\Basics\Challenges\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Basics\Challenges\IsPerfect\isPerfect;

class IsPerfectTest extends TestCase
{
    public function testIsPerfect()
    {
        $this->assertTrue(isPerfect(6));
        $this->assertTrue(isPerfect(28));
        
        $this->assertFalse(isPerfect(0));
        $this->assertFalse(isPerfect(1));
        $this->assertFalse(isPerfect(8));
    }
}
