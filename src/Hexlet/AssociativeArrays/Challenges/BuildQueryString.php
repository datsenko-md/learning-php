<?php

/*
Функция генерирует QueryString на основе вхоящего
массива параметров.
*/

namespace Php\Hexlet\AssociativeArrays\Challenges\BuildQueryString;

function buildQueryString($parameters)
{
    ksort($parameters);
    $result = [];
    
    foreach ($parameters as $key => $value) {
        $result[] = "{$key}={$value}";
    }
    
    return implode('&', $result);
}
