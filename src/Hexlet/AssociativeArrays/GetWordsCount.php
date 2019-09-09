<?php

/*
Функция подсчитывает количество слов в строке
*/

namespace Php\Hexlet\AssociativeArrays\GetWordsCount;

function getWordsCount($str)
{
    $words = explode(' ', $str);
    $result = [];
    
    foreach ($words as $word) {
        if (!array_key_exists($word, $result)) {
            $result[$word] = 1;
        } else {
            $result[$word]++;
        }
    }
    
    unset($result['']);
    
    return $result;
}
