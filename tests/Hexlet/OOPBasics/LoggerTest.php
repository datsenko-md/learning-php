<?php

namespace Tests\Hexlet\OOPBasics;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Logger;

class LoggerTest extends TestCase
{
    public function testLogger()
    {
        $obj = new Logger();
        $this->assertEquals('info', $obj->level);
    }
}
