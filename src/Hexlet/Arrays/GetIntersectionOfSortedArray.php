<?php

/*
Функция возвращает пересечение отсортированных массивов.
*/

namespace Php\Hexlet\Arrays\GetIntersectionOfSortedArray;

function getIntersectionOfSortedArray(array $arr1, array $arr2)
{
    if (empty($arr1) || empty($arr2)) {
        return [];
    }
        
    $intersection = [];
    
    $index1 = 0;
    $index2 = 0;
    $size1 = sizeof($arr1);
    $size2 = sizeof($arr2);
    
    do {
        $curr1 = $arr1[$index1];
        $curr2 = $arr2[$index2];
        
        if ($curr1 === $curr2) {
            $intersection[] = $curr1;
            $index1++;
            $index2++;
        } elseif ($curr1 > $curr2) {
            $index2++;
        } else {
            $index1++;
        }
    } while (($index1 < $size1) && ($index2 < $size2));
    
    return $intersection;
}
