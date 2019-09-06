<?php

/*
* Функция возвращает количество общих
* уникальных элементов для двух массивов.
*/

namespace Php\Hexlet\Basics\Arrays\GetSameCount;

function getSameCount(array $array1, array $array2)
{
    $arr1 = array_unique($array1);
    $arr2 = array_unique($array2);
    $count = 0;
    
    foreach ($arr1 as $value) {
        if (in_array($value, $arr2, true)) {
            $count++;
        }
    }
    
    return $count;
}
