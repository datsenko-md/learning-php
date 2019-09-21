<?php

namespace Tests\Hexlet\Arrays;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\AddPrefix\addPrefix;

class AddPrefixTest extends TestCase
{
    public function testAddPrefix()
    {
        $names = ["Bob", "Carl", "David"];
        
        $result = addPrefix($names, "Mr");
        $this->assertEquals(["Mr Bob", "Mr Carl", "Mr David"], $result);
    }
}
