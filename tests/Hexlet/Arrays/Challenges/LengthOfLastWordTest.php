<?php

namespace Php\Hexlet\Arrays\Challenges\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\Challenges\LengthOfLastWord\lengthOfLastWord;

class LengthOfLastWordTest extends TestCase
{
    public function testLengthOfLastWord()
    {
        $this->assertEquals(0, lengthOfLastWord(''));
        $this->assertEquals(5, lengthOfLastWord('man in BlacK'));
        $this->assertEquals(6, lengthOfLastWord('hello, world!  '));
        
    }
}
