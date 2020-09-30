<?php

/*
Функция возвращает среднее арифметическое параметров
Если параметры не заданы, возвращает null
*/

namespace App\Functions\Lessons\Average;

function average(...$numbers)
{
    if (empty($numbers)) {
        return null;
    }
    
    return array_sum($numbers) / count($numbers);
}
