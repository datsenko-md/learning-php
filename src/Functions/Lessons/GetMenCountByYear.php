<?php

/*
*/

namespace App\Functions\Lessons\GetMenCountByYear;

function getMenCountByYear(array $users)
{
    $menfolk = array_filter($users, function ($user) {
        return $user['gender'] === 'male';
    });
    
    $years = array_map(function ($user) {
        return date('Y', strtotime($user['birthday']));
    }, $menfolk);
    
    return array_reduce($years, function ($acc, $year) {
        if (!array_key_exists($year, $acc)) {
            $acc[$year] = 0;
        }
        $acc[$year]++;
        return $acc;
    }, []);
}
