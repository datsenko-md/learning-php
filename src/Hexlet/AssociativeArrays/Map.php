<?php

/*
*/

namespace Php\Hexlet\AssociativeArrays\Map;

function make()
{
    return [];
}

function set(&$map, $key, $value)
{
    $index = getIndex($key);
    
    if (isset($map[$index])) {
        [$currentKey] = $map[$index];
        if ($currentKey !== $key) {
            return false;
        }
    }
    
    $map[$index] = [$key, $value];
    return true;
}

function get($map, $key, $default = null)
{
    $index = getIndex($key);
    
    if (!isset($map[$index])) {
        return $default;
    }
    
    [, $value] = $map[$index];
    
    return $value;
}

function getIndex($key)
{
    return crc32($key) % 1000;
}
