<?php

//Find how many pairs X, Y there are in the array, such that abs(X-Y) is equal to the first argument.
//
//Example:
//
//3  == solution(4, [1,1,5,6,9,16,27])
//4  == solution(2, [1,1,3,3])
//3  == solution(12, [6,6,2,-11,9,-3,9,12,0,-11,7])
//3  == solution(7, [1,5,-2,2,-5,7,-2])
//2  == solution(1, [-1,1,0])
//4  == solution(3, [-2,0,-2,3,3,1])

function solution($num)
{
    $map = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];
    $nums = array_map(function ($item) use ($map) {
        return $map[$item];
    }, str_split($num));
    
    $sum = $nums[0];
    for ($i = 0; $i < count($nums) - 1; $i++) {
        $cur = $nums[$i];
        $next = $nums[$i + 1];
        $sum += $next;
        if ($cur < $next) {
            $sum -= 2 * $cur;
        }
    }
    return $sum;
}
