<?php

namespace Tests\OODesign\Lessons;

use PHPUnit\Framework\TestCase;

use function App\OODesign\Lessons\CheckIfBalanced\checkIfBalanced;

class CheckIfBalancedTest extends TestCase
{
    public function testCheckIfBalanced()
    {
        $this->assertTrue(checkIfBalanced('[{()}]'));
        $this->assertTrue(checkIfBalanced('()<>{}'));
        $this->assertFalse(checkIfBalanced('[({)}]'));
    }
}
