<?php

/*
* Функция реализует алгоритм сортировки "пузырьком"
*/

namespace App\Arrays\Lessons\BubbleSort;

/*
function bubbleSort(array $arr)
{
    if (empty($arr)) {
        return [];
    }

    $length = count($arr);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}
*/

function bubbleSort(array $arr)
{
    $size = count($arr);
    do {
        $swapped = false;
        for ($i = 0; $i < $size - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swapped = true;
            }
        }
        $size--;
    } while ($swapped);
    
    return $arr;
}
