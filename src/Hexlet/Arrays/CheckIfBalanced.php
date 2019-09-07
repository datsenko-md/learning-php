<?php

/*
Функция проверяет балансировку круглых скобок
в арифметических выражениях
*/

namespace Php\Hexlet\Arrays\CheckIfBalanced;

/*function checkIfBalanced($expression)
{
    $size = strlen($expression);

    $startSym = ['('];
    $endSym = [')'];
    $pairs = ['()'];

    $stack = [];

    for ($i = 0; $i < $size; $i++) {
        if (in_array($expression[$i], $startSym)) {
            array_push($stack, $expression[$i]);
        } elseif (in_array($expression[$i], $endSym)) {
            $prevSym = array_pop($stack);
            $pair = "{$prevSym}{$expression[$i]}";
            if (!in_array($pair, $pairs)) {
                return false;
            }
        }
    }

    return count($stack) == 0;
}*/
function checkIfBalanced($expression)
{
    $size = strlen($expression);
    $stack = [];
    
    for ($i = 0; $i < $size; $i++) {
        $curr = $expression[$i];
        if ($curr === '(') {
            array_push($stack, $curr);
        } elseif ($curr === ')') {
            if (empty($stack)) {
                return false;
            }
            array_pop($stack);
        }
    }
    
    return count($stack) == 0;
}
