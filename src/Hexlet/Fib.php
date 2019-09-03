<?php

/*
* Функция возвращает число Фибоначчи. 
* Аргумент - это порядковый номер числа.
*/

namespace Learning\Php\Hexlet\Fib;

// Вариант решения "в лоб"
function fib($num)
{
    if (($num === 0) || ($num === 1)) {
        return $num;
    }
    
    return fib($num - 1) + fib($num - 2);
}

function fib2($num)
{
    if (($num === 0) || ($num === 1)) {
        return $num;
    }
    
    
    
    for ($i = 2; $i < $num; $i++) {
        
    }
    
    return ;
}
