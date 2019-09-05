<?php

/*
* Функция возвращает число Фибоначчи.
* Аргумент - это порядковый номер числа.
*/

namespace Php\Hexlet\Arrays\Fib;

// Вариант решения "в лоб"
function fib($num)
{
    if (($num === 0) || ($num === 1)) {
        return $num;
    }
    
    return fib($num - 1) + fib($num - 2);
}

// Альтернативное решение
function fib2($num)
{
    $f0 = 0;
    $f1 = 1;
    $fibSum = 0;
    
    for ($i = 0; $i < $num; $i++) {
        $f0 = $f1;
        $f1 = $fibSum;
        $fibSum = $f0 + $f1;
    }
    
    return $fibSum;
}
