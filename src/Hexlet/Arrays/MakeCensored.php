<?php

/*
* Функция заменяет заданные слова в тексте
* заменителем '$#%!'
*/

namespace Php\Hexlet\Basics\Arrays\MakeCensored;

function makeCensored($text, $stopWords)
{
    $words = explode(' ', $text);
    $result = [];
    
    foreach ($words as $word) {
        $result[] = in_array($word, $stopWords) ? '$#%!' : $word;
    }
    
    return implode(' ', $result);
}
