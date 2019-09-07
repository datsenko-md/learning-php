<?php

/*
Функция итеративно подсчитывает сумму цифр числа.
addDigits(38); // => 2
38 -> 3 + 8 = 11
11 -> 1 + 1 = 2
*/

namespace Php\Hexlet\Basics\Challenges\AddDigits;

function addDigits($num)
{
    while ($num >= 10) {
        $str = (string) $num;
        $arr = str_split($str);
        $num = array_sum($arr);
    }
    
    return $num;
}
