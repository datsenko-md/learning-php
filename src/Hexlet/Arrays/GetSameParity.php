<?php

/*
* Функция фильтрует массив и оставляет в нем
* только те элементы, четность которых
* совпадает с четностью первого элемента
* исходного массива.
*/

namespace Php\Hexlet\Arrays\GetSameParity;

function getSameParity(array $col)
{
    if (empty($col)) {
        return [];
    }
    
    $result = [];
    $reminder = $col[0] % 2;
    
    foreach ($col as $value) {
        if ($value % 2 === $reminder) {
            $result[] = $value;
        }
    }
    
    return $result;
}
