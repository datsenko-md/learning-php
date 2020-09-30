<?php

namespace Tests\OOPBasics\Lessons;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Lessons\Logger;

class LoggerTest extends TestCase
{
    public function testLogger()
    {
        $obj = new Logger();
        $this->assertEquals('info', $obj->level);
    }
}
