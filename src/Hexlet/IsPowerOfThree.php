<?php

/*
* Функция определяет, является ли число
* натуральной степенью тройки
*/

namespace Learning\Php\Hexlet\IsPowerOfThree;

function isPowerOfThree($number)
{
    if ($number === 1) {
        return true;
    }
    
    $intPowerOfThree = round(pow($number, 1 / 3));
    
    return $number === (int) pow(3, $intPowerOfThree);
}
