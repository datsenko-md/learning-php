<?php

namespace Tests\Hexlet\OODesign;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\OODesign\CheckIfBalanced\checkIfBalanced;

class CheckIfBalancedTest extends TestCase
{
    public function testCheckIfBalanced()
    {
        $this->assertTrue(checkIfBalanced('[{()}]'));
        $this->assertTrue(checkIfBalanced('()<>{}'));
        $this->assertFalse(checkIfBalanced('[({)}]'));
    }
}
