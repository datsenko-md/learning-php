<?php

namespace App\OODesign\Lessons\CheckIfBalanced;

function checkIfBalanced(string $expression): bool
{
    $stack = new \Ds\Stack();
    $startSymbols = ['{', '(', '[', '<'];
    $pairs = ['{}', '()', '[]', '<>'];
    
    for ($i = 0; $i < strlen($expression); $i++) {
        $curr = $expression[$i];
        if (in_array($curr, $startSymbols)) {
            $stack->push($curr);
        } else {
            $prev = $stack->pop();
            $pair = "{$prev}{$curr}";
            
            if (!in_array($pair, $pairs)) {
                return false;
            }
        }
    }
    
    return sizeof($stack) == 0;
}
