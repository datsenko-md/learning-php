<?php

/*
Функция считае длину последнего слова в строке.
*/

namespace App\Arrays\Challenges\LengthOfLastWord;

function lengthOfLastWord($str)
{
    $trimmedStr = rtrim($str);
    $words = explode(' ', $trimmedStr);
    $lastWord = $words[count($words) - 1];
    return strlen($lastWord);
}
