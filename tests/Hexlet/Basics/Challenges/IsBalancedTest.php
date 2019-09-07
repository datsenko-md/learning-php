<?php

namespace Php\HexletBasics\Challenges\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Basics\Challenges\IsBalanced\isBalanced;

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
