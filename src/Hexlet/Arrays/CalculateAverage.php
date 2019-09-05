<?php

/*
* Функция рассчитывает среднее арифметическое элементов массива.
*/

namespace Learning\Php\Hexlet\CalculateAverage;

function сalculateAverage(array $col)
{
    if (empty($col)) {
        return null;
    }
    
    $count = count($col);
    $sum = 0;
    
    foreach ($col as $value) {
        $sum += $value;
    }
    
    return $sum / $count;
}
