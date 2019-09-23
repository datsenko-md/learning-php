<?php

namespace Tests\Hexlet\OODesign\Challenges;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OODesign\Challenges\Obj;

class ObjTest extends TestCase
{
    public function testObj()
    {
        $items = [
            'key' => 'value',
            'key2' => [
                'key3' => 'value3'
            ]
        ];
        $obj = new Obj($items);
        $this->assertEquals('value', $obj->key);
        $this->assertEquals('value', $obj['key']);
        $this->assertEquals('value3', $obj->key2->key3);
        $this->assertEquals('value3', $obj['key2']['key3']);
        $this->assertEquals(null, $obj->key3);
        $this->assertEquals(null, $obj['key3']);
        
        $obj->key = 'another value';
        $this->assertEquals('another value', $obj->key);
        $this->assertEquals('another value', $obj['key']);

        $obj->key2->key3 = 'bla';
        $this->assertEquals('bla', $obj->key2->key3);
        $this->assertEquals('bla', $obj['key2']['key3']);
        
        $obj->key4 = 'another value';
        $this->assertEquals('another value', $obj->key4);
        $this->assertEquals('another value', $obj['key4']);
    }
}
