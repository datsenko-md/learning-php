<?php

/*
Функция изврекает из массива пары ключ-значение в соответствии с
переданным параметром.
*/

namespace App\AssociativeArrays\Lessons\Pick;

function pick(array $arr, array $keys)
{
    $result = [];
    
    foreach ($arr as $key => $value) {
        if (in_array($key, $keys)) {
            $result[$key] = $value;
        }
    }
    
    return $result;
}
