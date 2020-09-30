<?php

/*
Функиця реализует игру FizzBuzz
*/

namespace App\Basics\Challenges\FizzBuzz;

function fizzBuzz($begin, $end)
{
    $result = [];
    
    for ($i = $begin; $i <= $end; $i++) {
        if (($i % 3 === 0) && ($i % 5 === 0)) {
            $result[] = 'FizzBuzz';
        } elseif ($i % 3 === 0) {
            $result[] = 'Fizz';
        } elseif ($i % 5 === 0) {
            $result[] = 'Buzz';
        } else {
            $result[] = $i;
        }
    }
    
    return implode(' ', $result);
}
