<?php

/*
*/

namespace Php\Hexlet\Functions\GetDifference;

function getDifference(array $items1, array $items2)
{
    $filtered = array_filter($items1, function ($item) use ($items2) {
        return !in_array($item, $items2);
    });
    
    return array_values($filtered);
}
