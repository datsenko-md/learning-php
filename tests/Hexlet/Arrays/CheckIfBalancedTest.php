<?php

namespace Tests\Hexlet\Arrays;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\CheckIfBalanced\checkIfBalanced;

class CheckIfBalancedTest extends TestCase
{
    public function testCheckIfBalanced()
    {
        $data1 = '(3 + 2) / (2 + 7)*(2 + 5)';
        $this->assertTrue(checkIfBalanced($data1));
        
        $data2 = '(3 + 2))';
        $this->assertFalse(checkIfBalanced($data2));
    }
}
