<?php

/*
* Функция меняет элементы массива относительно заданного индекса
* Например если индекс 3, то меняются элементы с индексами 2 и 4.
* Если хотя бы одного индекса не существует - возвращается
* исходный массив.
*/

namespace Learning\Php\Hexlet\SwapElementsInArray;

function swapElementsInArray(array $col, $center)
{
    $prevIndex = $center - 1;
    $nextIndex = $center + 1;
        
    $isSwapable = array_key_exists($prevIndex, $col) && array_key_exists($nextIndex, $col);
    
    if ($isSwapable) {
        $temp = $col[$prevIndex];
        $col[$prevIndex] = $col[$nextIndex];
        $col[$nextIndex] = $temp;
    }
        
    return $col;
}
