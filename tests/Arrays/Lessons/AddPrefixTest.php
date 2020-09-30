<?php

namespace Tests\Arrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Lessons\AddPrefix\addPrefix;

class AddPrefixTest extends TestCase
{
    public function testAddPrefix()
    {
        $names = ["Bob", "Carl", "David"];
        
        $result = addPrefix($names, "Mr");
        $this->assertEquals(["Mr Bob", "Mr Carl", "Mr David"], $result);
    }
}
