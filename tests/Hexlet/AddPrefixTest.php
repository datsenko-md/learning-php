<?php

namespace Learning\Php\Hexlet\Tests;

use PHPUnit\Framework\TestCase;
use function Learning\Php\Hexlet\AddPrefix\addPrefix;

class AddPrefixTest extends TestCase
{
    public function testAddPrefix()
    {
        $names = ["Bob", "Carl", "David"];
        
        $result = addPrefix($names, "Mr");
        $this->assertEquals(["Mr Bob", "Mr Carl", "Mr David"], $result);
    }
}
