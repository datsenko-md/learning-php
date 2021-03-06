<?php

/*
* Фунция добавляет префикс к каждому элементу массива.
* После префикса ставится пробел.
*/

namespace App\Arrays\Lessons\AddPrefix;

function addPrefix(array $array, $prefix)
{
    $result = [];
    
    for ($i = 0, $length = count($array); $i < $length; $i++) {
        $result[$i] = "{$prefix} {$array[$i]}";
    }
    
    return $result;
}
