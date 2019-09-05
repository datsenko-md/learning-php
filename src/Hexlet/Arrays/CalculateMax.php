<?php

/*
* Функция находит максимальное значение в массиве.
*/

namespace Learning\Php\Hexlet\CalculateMax;

function сalculateMax(array $col)
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
