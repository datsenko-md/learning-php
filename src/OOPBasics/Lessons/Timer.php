<?php

namespace App\OOPBasics\Lessons;

class Timer
{
    private const SEC_PER_MIN = 60;
    private const SEC_PER_HOUR = 60 * self::SEC_PER_MIN;
    
    private $secondsCount;
    
    public function __construct($seconds, $minutes = 0, $hours = 0)
    {
        $this->secondsCount = $seconds + ($minutes * self::SEC_PER_MIN) + ($hours * self::SEC_PER_HOUR);
    }
    
    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }
    
    public function tick()
    {
        $this->secondsCount--;
    }
}
