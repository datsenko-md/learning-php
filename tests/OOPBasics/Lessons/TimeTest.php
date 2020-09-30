<?php

namespace Tests\OOPBasics\Lessons;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Lessons\Time;

class TimeTest extends TestCase
{
    public function testTime()
    {
        $time = new Time(3, 15);
        $this->assertEquals('3:15', "{$time}");
        
        $time2 = Time::fromString('4:5');
        $this->assertEquals('4:5', "{$time2}");
    }
}
