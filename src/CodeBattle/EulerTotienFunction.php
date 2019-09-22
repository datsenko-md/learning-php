<?php

//Two numbers are coprime if their greatest common divisor equals 1.
//Implement the Euler's totient function f(x),
//which is defined as the number of positive integers less
//than x which are coprime to x.
//
//Example:
//
//1  == solution(1)
//4  == solution(10)
//16  == solution(40)
//60  == solution(99)

function solution($num)
{
    $counter = 0;
    for ($i = 1; $i <= $num; $i++) {
        if (gcd($num, $i) === 1) {
            $counter++;
        }
    }
    return $counter;
}

function gcd($a, $b)
{
    return $b === 0 ? $a : gcd($b, $a % $b);
}
