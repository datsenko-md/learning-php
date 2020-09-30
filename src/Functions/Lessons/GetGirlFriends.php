<?php

/*
Функция возвращает плоский список подруг
*/

namespace App\Functions\Lessons\GetGirlFriends;

use function Funct\Collection\flatten;

function getGirlFriends(array $users)
{
    $friends = flatten(array_map(function ($user) {
        return $user['friends'];
    }, $users));
    
    $girlFriends = array_filter($friends, function ($friend) {
        return $friend['gender'] === 'female';
    });
    
    return array_values($girlFriends);
}
