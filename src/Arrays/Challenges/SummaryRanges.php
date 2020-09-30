<?php

/*
*/

namespace App\Arrays\Challenges\SummaryRanges;

function summaryRanges(array $arr)
{
    if (empty($arr)) {
        return [];
    }
    
    $result = [];
    $length = count($arr);
    
    for ($i = 0; $i < $length; $i++) {
        if ($i === 0) {
            $start = $arr[0];
            $expected = $start + 1;
            continue;
        }
        
        $curr = $arr[$i];
        
        if ($curr !== $expected) {
            $end = $expected - 1;
            if ($start < $end) {
                $result[] = "{$start}->{$end}";
            }
            $start = $curr;
            $expected = $start + 1;
            continue;
        }
        if ($i === $length - 1) {
            $result[] = "{$start}->{$expected}";
        }
        
        $expected++;
    }
    
    return $result;
}
