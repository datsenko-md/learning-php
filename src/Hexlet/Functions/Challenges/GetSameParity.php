<?php

namespace Php\Hexlet\Functions\Challenges\GetSameParity;

function getSameParity(array $arr)
{
    if (empty($arr)) {
        return [];
    }
    
    $parityOfFirstElement = abs($arr[0] % 2);
    $filtered = array_filter($arr, function ($element) use ($parityOfFirstElement) {
        return abs($element % 2) === $parityOfFirstElement;
    });
    
    return array_values($filtered);
}
