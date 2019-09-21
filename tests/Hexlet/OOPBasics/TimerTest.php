<?php

namespace Tests\Hexlet\OOPBasics;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Timer;

class TimerTest extends TestCase
{
    public function testTimer()
    {
        $timer = new Timer(44);
        $this->assertEquals(44, $timer->getLeftSeconds());
        
        $timer->tick();
        $this->assertEquals(43, $timer->getLeftSeconds());
        
        $timer2 = new Timer(10, 3);
        $this->assertEquals(190, $timer2->getLeftSeconds());
        
        $timer3 = new Timer(10, 3, 1);
        $this->assertEquals(3790, $timer3->getLeftSeconds());
    }
}
