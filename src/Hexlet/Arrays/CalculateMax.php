<?php

/*
* Функция находит максимальное значение в массиве.
*/

namespace Php\Hexlet\Arrays\CalculateMax;

function calculateMax(array $col)
{
    if (empty($col)) {
        return null;
    }
    
    $max = $col[0];
    
    foreach ($col as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    
    return $max;
}
