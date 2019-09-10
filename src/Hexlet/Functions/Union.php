<?php

/*
Функция считает пересечение массивов
*/

namespace Php\Hexlet\Functions\Union;

function union($first, ...$rest)
{
    $mapWithUniqKeys = array_unique(array_merge($first, ...$rest));
    return array_values($result);
}
