<?php

namespace Tests\Functions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Functions\Lessons\LastSym\lastSym;

class LastSymTest extends TestCase
{
    public function testLastSym()
    {
        $this->assertEquals('o', lastSym('Hello'));
        $this->assertNull(lastSym(''));
    }
}
