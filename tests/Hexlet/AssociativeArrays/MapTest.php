<?php

namespace Tests\Hexlet\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\AssociativeArrays\Map\make;
use function Php\Hexlet\AssociativeArrays\Map\set;
use function Php\Hexlet\AssociativeArrays\Map\get;

class MapTest extends TestCase
{
    public function testMap()
    {
        $map = make();
        $this->assertEquals(null, get($map, 'key'));
        $this->assertEquals('value', get($map, 'key', 'value'));
        
        set($map, 'key2', 'value2');
        $this->assertEquals('value2', get($map, 'key2'));
        
        set($map, 'key2', 'another value');
        $this->assertEquals('another value', get($map, 'key2'));
    }
    
    public function testCollision()
    {
        $map = make();
        
        set($map, 'aaaaa0.462031558722291', 'vvv');
        set($map, 'aaaaa0.0585754039730588', 'boom!');

        $result = get($map, 'aaaaa0.462031558722291');
        $this->assertEquals('vvv', $result);
        $result = get($map, 'aaaaa0.0585754039730588');
        $this->assertEquals('vvv', $result);

        set($map, 'aaaaa0.462031558722291', 'wop');
        $result = get($map, 'aaaaa0.462031558722291');
        $this->assertEquals('wop', $result);
    }
}
