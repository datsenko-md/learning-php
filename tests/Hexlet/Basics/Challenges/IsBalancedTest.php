<?php

namespace Php\Hexlet\Arrays\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\IsBalanced\isBalanced;

class IsBalancedTest extends TestCase
{
    public function testIsBalanced()
    {
        $this->assertTrue(isBalanced('()'));
        $this->assertTrue(isBalanced('((()))'));
        $this->assertTrue(isBalanced('(()())'));
        $this->assertTrue(isBalanced(''));

        $this->assertFalse(isBalanced('((())'));
        $this->assertFalse(isBalanced('('));
        $this->assertFalse(isBalanced(')'));
        $this->assertFalse(isBalanced(')('));
        
    }
}
