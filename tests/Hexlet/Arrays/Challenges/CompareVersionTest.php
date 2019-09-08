<?php

namespace Php\Hexlet\Arrays\Challenges\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\Challenges\CompareVersion\compareVersion;

class CompareVersionTest extends TestCase
{
    public function testCompareVersion()
    {
        $this->assertEquals(0, compareVersion('0.2.4', '0.2.4'));
        $this->assertEquals(1, compareVersion('0.2.5', '0.2.4'));
        $this->assertEquals(1, compareVersion('1.0.0', '0.2.4'));
        $this->assertEquals(-1, compareVersion('0.2.4', '0.12.4'));
    }
}
