<?php

namespace App\OODesign\Lessons\Comparator;

function compare(string $text1, string $text2): bool
{
    $evaluetedText1 = evaluate($text1);
    $evaluetedText2 = evaluate($text2);
    
    return $evaluetedText1 === $evaluetedText2;
}

function evaluate(string $text): string
{
    $stack = new \Ds\Stack();
    
    for ($i = 0; $i < mb_strlen($text); $i++) {
        $curr = $text[$i];
        if ($curr !== '#') {
            $stack->push($curr);
        } elseif (!$stack->isEmpty()) {
            $stack->pop();
        }
    }
    
    return implode('', $stack->toArray());
}
