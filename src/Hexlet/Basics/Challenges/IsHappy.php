<?php

/*
Фунцкия проверяет, счастливый ли билет.
Счастливым считается билет, у которого сумма цифр
первой половины номера равна сумме цифро второй половины.

123321 - счастливый 1+2+3 = 3+2+1
123421 - несчастливый 1+2+3 != 4+2+1
*/

namespace Php\Hexlet\Arrays\IsHappy;

/*function isHappy($num)
{
    $center = strlen($num) / 2;
    $firstHalfSum = 0;
    $secondHalfSum = 0;
    
    for ($i = 0; $i < $center; $i++) {
        $firstHalfSum += $num[$i];
        $secondHalfSum += $num[$i + $center];
    }
    
    return $firstHalfSum === $secondHalfSum;
}*/

function isHappy($num)
{
    $balance = 0;
    
    for ($i = 0, $j = strlen($num) - 1; $i < $j; $i++, $j--) {
        $balance += $num[$i] - $num[$j];
    }
    
    return $balance === 0;
}
