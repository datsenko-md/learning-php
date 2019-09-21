<?php

namespace Tests\Hexlet\Arrays\Challenges;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\Challenges\HammingWeight\hammingWeight;

class HammingWeightTest extends TestCase
{
    public function testHammingWeight()
    {
        $this->assertEquals(1, hammingWeight(4));
        $this->assertEquals(4, hammingWeight(101));
        $this->assertEquals(0, hammingWeight(0));
    }
}
