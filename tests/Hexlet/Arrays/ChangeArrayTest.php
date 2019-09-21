<?php

namespace Tests\Hexlet\Arrays;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\ChangeArray\changeArray;

class ChangeArrayTest extends TestCase
{
    public function testChangeArray()
    {
        $names = ["Anna", "Bob", "Carl", "David"];
        
        $result1 = changeArray($names, "reset");
        $this->assertEquals([], $result1);
        
        $result2 = changeArray($names, "remove", 2);
        $this->assertEquals(["Anna", "Bob", "David"], array_values($result2));
        
        $result3 = changeArray($names, "change", 1, "Mark");
        $this->assertEquals(["Anna", "Mark", "Carl", "David"], array_values($result3));
    }
}
