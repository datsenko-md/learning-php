<?php

/*
Функция возвращает среднее арифметическое параметров
Если параметры не заданы, возвращает null
*/

namespace Php\Hexlet\Functions\Average;

function average(...$numbers)
{
    if (empty($numbers)) {
        return null;
    }
    
    return array_sum($numbers) / count($numbers);
}
