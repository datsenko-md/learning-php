<?php

namespace App\OOPBasics\Lessons\UserFunctions;

use App\OOPBasics\Lessons\User;

function areUsersEqual(User $user1, User $user2)
{
    return $user1->getId() === $user2->getId();
}
