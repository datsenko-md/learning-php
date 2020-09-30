<?php

/*
*/

namespace App\Functions\Lessons\GetChildren;

use function Funct\Collection\flatten;

function getChildren($users)
{
    $children = array_map(function ($user) {
        return $user['children'];
    }, $users);
    
    return flatten($children);
}
