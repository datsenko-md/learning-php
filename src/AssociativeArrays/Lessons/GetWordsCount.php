<?php

/*
Функция подсчитывает количество слов в строке
*/

namespace App\AssociativeArrays\Lessons\GetWordsCount;

function getWordsCount($str)
{
    $words = explode(' ', $str);
    $result = [];
    
    foreach ($words as $word) {
        if (empty($word)) {
            continue;
        }
        if (!array_key_exists($word, $result)) {
            $result[$word] = 1;
        } else {
            $result[$word]++;
        }
    }
    
    return $result;
}
