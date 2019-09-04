<?php

/*
* Функция меняет элементы массива в обратном порядке
* без создания нового массива.
* P.S. Изменять аргументы - плохой подход, но суть этой
* задачи в алгоритме.
*/

namespace Learning\Php\Hexlet\ReverseArray;

function reverseArray($array)
{
    $size = sizeof($array);
    $maxIndex = floor($size / 2);
    
    for ($i = 0; $i < $maxIndex; $i++) {
        $temp = $array[$size - $i - 1];
        $array[$size - $i - 1] = $array[$i];
        $array[$i] = $temp;
    }
    
    return $array;
}
