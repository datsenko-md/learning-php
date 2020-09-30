<?php

/*
Функция возвращает n самых старших пользователей
*/

namespace App\Functions\Lessons\TakeOldest;

use function Funct\Collection\firstN;

function takeOldest(array $users, $n = 1)
{
    usort($users, function ($user1, $user2) {
        $time1 = strtotime($user1['birthday']);
        $time2 = strtotime($user2['birthday']);
        
        return $time1 <=> $time2;
    });
    
    return firstN($users, $n);
}
