<?php

/*
* Функция возвращает количество уникальных символов в строке.
* Реализация без использования array_unique().
*/

namespace App\Arrays\Lessons\CountUniqChars;

function countUniqChars($text)
{
    $uniqChars = [];
    
    for ($i = 0, $length = strlen($text); $i < $length; $i++) {
        if (!in_array($text[$i], $uniqChars)) {
            $uniqChars[] = $text[$i];
        }
    }
    
    return count($uniqChars);
}
