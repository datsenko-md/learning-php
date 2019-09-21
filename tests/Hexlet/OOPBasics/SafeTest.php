<?php

namespace Php\Hexlet\OOPBasics\Tests;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Safe;

class SafeTest extends TestCase
{
    public function testSafe1()
    {
        $data = Safe\json_decode('{ "key": "value" }', true);
        $this->assertEquals(['key' => 'value'], $data);
    }
    
    public function testSafe2()
    {
        $this->expectException(\Exception::class);
        $data = Safe\json_decode('{ "key: "value" }', true);
    }
}
