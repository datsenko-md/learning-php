<?php

namespace Php\Hexlet\OOPBasics\UserFunctions;

use Php\Hexlet\OOPBasics\User;

function areUsersEqual(User $user1, User $user2)
{
    return $user1->id === $user2->id;
}
