<?php

namespace Php\Hexlet\Functions\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Functions\GetDifference\getDifference;

class GetDifferenceTest extends TestCase
{
    public function testGetDifference()
    {
        $this->assertEquals([1], getDifference([2, 1], [2, 3]));
    }
}
