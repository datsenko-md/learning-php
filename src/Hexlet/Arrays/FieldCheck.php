<?php

/*
* Функция определяет, есть ли в массиве искомый символ.
*/

namespace Php\Hexlet\Arrays\FieldCheck;

function fieldCheck(array $field, $symbol)
{
    foreach ($field as $row) {
        if (in_array($symbol, $row)) {
            return true;
        }
    }
    
    return false;
}
