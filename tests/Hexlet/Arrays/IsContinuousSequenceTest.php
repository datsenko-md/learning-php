<?php

namespace Tests\Hexlet\Arrays;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\IsContinuousSequence\isContinuousSequence;

class IsContinuousSequenceTest extends TestCase
{
    public function testIsContinuousSequence()
    {
        $this->assertTrue(isContinuousSequence([5, 6, 7, 8, 9]));
        $this->assertTrue(isContinuousSequence([0, 1, 2, 3, 4]));
        $this->assertTrue(isContinuousSequence([-4, -3, -2 , -1]));
        
        
        $this->assertFalse(isContinuousSequence([5, 6, 8, 9]));
        $this->assertFalse(isContinuousSequence([5, 6, 8, 8, 9]));
        $this->assertFalse(isContinuousSequence([]));
    }
}
