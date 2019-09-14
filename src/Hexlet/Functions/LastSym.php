<?php

/*
Анонимная функция, которая возвращает последний символ
строки или null, если строка пустая.
*/

namespace Php\Hexlet\Functions\LastSym;

function lastSym(string $text)
{
    $last = function ($text) {
        return strlen($text) === 0 ? null : $text[-1];
    };
    
    return $last($text);
}
