<?php

namespace Tests\OOPBasics\Lessons;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Lessons\Safe;

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
