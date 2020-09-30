<?php

/*
*/

namespace App\AssociativeArrays\Lessons\GetSortedNames;

function getSortedNames($users)
{
    $names = [];
    
    foreach ($users as ['name' => $name]) {
        $names[] = $name;
    }
    
    sort($names);
    
    return $names;
}
