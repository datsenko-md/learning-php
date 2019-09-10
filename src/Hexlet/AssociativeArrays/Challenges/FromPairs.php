<?php

/*
Функция принимает на вход массив состоящий из пар ключ-значение
и возвращает ассоциативный массив.
*/

namespace Php\Hexlet\AssociativeArrays\Challenges\FromPairs;

function fromPairs(array $pairs)
{
    $result = [];
    
    foreach ($pairs as [$key, $value]) {
        $result[$key] = $value;
    }
    
    return $result;
}
