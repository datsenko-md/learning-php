<?php

namespace Tests\Hexlet\Functions;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Functions\LastSym\lastSym;

class LastSymTest extends TestCase
{
    public function testLastSym()
    {
        $this->assertEquals('o', lastSym('Hello'));
        $this->assertNull(lastSym(''));
    }
}
