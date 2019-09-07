<?php

namespace Php\Hexlet\Arrays\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\IsPerfect\isPerfect;

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
