<?php

/*
Функция определяет совершенное ли число.
*/

namespace Php\Hexlet\Basics\Challenges\IsPerfect;

/*function isPerfect($num)
{
    if ($num === 0) {
        return false;
    }

    $sumOfDividers = 0;

    for ($i = 1; $i < $num; $i++) {
        if ($num % $i === 0) {
            $sumOfDividers += $i;
        }
    }

    return $sumOfDividers === $num;
}*/


function isPerfect($num)
{
    if ($num === 0) {
        return false;
    }
    
    $sumOfDividers = 0;
    $upperBorder = $num / 2;
    
    for ($divider = 1; $divider <= $upperBorder; $divider++) {
        if ($num % $divider === 0) {
            $sumOfDividers += $divider;
        }
    }
    
    return $sumOfDividers === $num;
}
