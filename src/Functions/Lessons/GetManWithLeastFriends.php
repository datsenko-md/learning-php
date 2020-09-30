<?php

/*
*/

namespace App\Functions\Lessons\GetManWithLeastFriends;

use Funct\Collection;

function getManWithLeastFriends(array $users)
{
    if (empty($users)) {
        return null;
    }
    return Collection\minValue($users, function ($user) {
        return count($user['friends']);
    });
}
