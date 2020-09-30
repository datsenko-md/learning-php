<?php

namespace App\OODesign\Lessons;

use Carbon\Carbon;

class Booking
{
    private $dates = [];
    
    public function book(string $begin, string $end): bool
    {
        $carbonNewBegin = new Carbon($begin);
        $carbonNewEnd = new Carbon($end);
        
        if ($this->canBook($carbonNewBegin, $carbonNewEnd)) {
            $this->dates[] = [$carbonNewBegin, $carbonNewEnd];
            return true;
        }
        
        return false;
    }
    
    private function canBook($begin, $end)
    {
        if ($begin >= $end) {
            return false;
        }
        
        foreach ($this->dates as [$bookedBegin, $bookedEnd]) {
            $isStartedAfter = $begin < $bookedEnd;
            $isEndedBefore = $end > $bookedBegin;
            if ($isStartedAfter && $isEndedBefore) {
                return false;
            }
        }
        
        return true;
    }
}
