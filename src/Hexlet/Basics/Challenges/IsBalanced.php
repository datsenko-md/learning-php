<?php

/*
Функция проверяет, сбалансирован ли набор скобок
*/

namespace Php\Hexlet\Arrays\IsBalanced;

/*
function isBalanced($expression)
{
    $size = strlen($expression);
    $stack = [];
    
    for ($i = 0; $i < $size; $i++) {
        $curr = $expression[$i];
        
        if ($curr === '(') {
            array_push($stack, $curr);
        } else {
            if (empty($stack)) {
                return false;
            }
            array_pop($stack);
        }
    }
    
    return count($stack) === 0;
}
*/

function isBalanced($str)
{
    $count = 0;
    
    for ($i = 0, $length = strlen($str); $i < $length; $i++) {
        $count = $str[$i] === '(' ? $count + 1 : $count - 1;
        
        if ($count < 0) {
            return false;
        }
    }
    
    return $count === 0;
}
