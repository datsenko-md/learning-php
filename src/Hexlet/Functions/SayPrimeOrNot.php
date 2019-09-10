<?php

/*
Функция печатает на экран, простое число или нет
*/

namespace Php\Hexlet\Functions\SayPrimeOrNot;

function sayPrimeOrNot($num)
{
    $answer = isPrime($num) ? 'yes' : 'no';
    print_r($answer);
}

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    
    $divider = 2;
    while ($divider < $num) {
        if ($num % $divider === 0) {
            return false;
        }
        $divider++;
    }
    
    return true;
}
