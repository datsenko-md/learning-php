<?php

/*
*/

namespace Php\Hexlet\AssociativeArrays\GetSortedNames;

function getSortedNames($users)
{
    $names = [];
    
    foreach ($users as ['name' => $name]) {
        $names[] = $name;
    }
    
    sort($names);
    
    return $names;
}
