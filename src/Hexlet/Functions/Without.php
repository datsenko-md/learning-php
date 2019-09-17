<?php

/*
*/

namespace Php\Hexlet\Functions\Without;

function without(array $items, ...$values)
{
    $filtered = array_filter($items, function ($item) use ($values) {
        return !in_array($item, $values);
    });
    
    return array_values($filtered);
}
