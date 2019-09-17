<?php

/*
*/

namespace Php\Hexlet\Functions\GetManWithLeastFriends;

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
