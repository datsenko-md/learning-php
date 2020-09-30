<?php

namespace Tests\HexletBasics\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Basics\Challenges\IsBalanced\isBalanced;

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
