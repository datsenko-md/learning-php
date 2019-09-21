<?php

namespace Tests\Hexlet\Basics\Challenges;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Basics\Arrays\CountUniqChars\countUniqChars;

class CountUniqCharsTest extends TestCase
{
    public function testCountUniqChars()
    {
        $actual2 = countUniqChars('abc');
        $this->assertEquals(3, $actual2);
        
        $actual1 = countUniqChars('');
        $this->assertEquals(0, $actual1);
        
        $actual3 = countUniqChars('0');
        $this->assertEquals(1, $actual3);
        
        $actual4 = countUniqChars('abca bc!');
        $this->assertEquals(5, $actual4);
    }
}
