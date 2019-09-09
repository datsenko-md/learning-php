<?php

/*
Фунция извлекает из массива значения по указанным ключам
*/

namespace Php\Hexlet\AssociativeArrays\GetIn;

/*function getIn($data, array $keys)
{
    while (is_array($data)) {
        $currKey = array_shift($keys);
        
        if (!array_key_exists($currKey, $data)) {
            return null;
        }
        
        if (empty($keys)) {
            return $data[$currKey];
        } else {
            return getIn($data[$currKey], $keys);
        }
    }
    
    return null;
}*/

function getIn($data, array $keys)
{
    $current = $data;
    
    foreach ($keys as $key) {
        if (!isset($current[$key])) {
            return null;
        }
        $current = $current[$key];
    }
    
    return $current;
}
