<?php

/*
*/

namespace Php\Hexlet\AssociativeArrays\GenDiff;

function genDiff(array $arr1, array $arr2)
{
    $result = array_unique(array_merge($arr1, $arr2));
    
    foreach ($result as $key => $value) {
        if (!array_key_exists($key, $arr1)) {
            $result[$key] = 'added';
            continue;
        } elseif (!array_key_exists($key, $arr2)) {
            $result[$key] = 'deleted';
            continue;
        }
        
        $result[$key] = $arr1[$key] === $arr2[$key] ? 'unchanged' : 'changed';
    }
    
    return $result;
}
