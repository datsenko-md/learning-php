<?php

/*
Функция возвращает длину максимальной последовательности из
неповторяющихся символов
*/

namespace App\Arrays\Challenges\LongestLength;

function longestLength($str)
{
    $length = strlen($str);
    $i = 0;
    $maxLength = 0;
    $startIndex = 0;
    $buffer = [];
    
    while ($i < $length) {
        $char = $str[$i];
        if (!in_array($char, $buffer)) {
            $buffer[] = $char;
            $i++;
        } else {
            $startIndex += 1;
            $i = $startIndex;
            $maxLength = count($buffer) > $maxLength ? count($buffer) : $maxLength;
            $buffer = [];
        }
    }
    
    return count($buffer) > $maxLength ? count($buffer) : $maxLength;
}
