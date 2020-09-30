<?php

/*
Функция считает вес Хемминга числа
Вес Хэмминга - это сумма единиц в двоичном представлении числа
*/

namespace App\Arrays\Challenges\HammingWeight;

function hammingWeight($num)
{
    $str = decbin($num);
    $arr = str_split($str);
    return array_sum($arr);
}
