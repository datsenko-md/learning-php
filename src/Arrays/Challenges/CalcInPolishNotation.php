<?php

/*
*/

namespace App\Arrays\Challenges\CalcInPolishNotation;

function calcInPolishNotation($expression)
{
    $operators = ['+', '-', '*', '/'];
    $stack = [];
    
    foreach ($expression as $value) {
        if (!in_array($value, $operators)) {
            array_push($stack, $value);
        } else {
            $operand2 = array_pop($stack);
            $operand1 = array_pop($stack);
            
            switch ($value) {
                case '+':
                    array_push($stack, $operand1 + $operand2);
                    break;
                case '-':
                    array_push($stack, $operand1 - $operand2);
                    break;
                case '*':
                    array_push($stack, $operand1 * $operand2);
                    break;
                case '/':
                    array_push($stack, $operand1 / $operand2);
                    break;
            }
        }
    }
    
    return array_pop($stack);
}

//          "src/Hexlet/Arrays/Challenges/CalcInPolishNotation.php",
