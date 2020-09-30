<?php

/*
* Функция возвращает элемент по указанному индексу,
* если он существует. В ином случае возвращает значение
* по умолчанию. На вход принимает три параметра:
* * Массив
* * Индекс
* * Значение по умолчанию
*/

namespace App\Arrays\Lessons\GetElementIfExists;

function getElementIfExists(array $array, $index, $defaultValue = null)
{
    if (array_key_exists($index, $array)) {
        return $array[$index];
    }
    
    return $defaultValue;
}
