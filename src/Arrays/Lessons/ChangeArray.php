<?php

/*
* Данная функция меняет переданный массив в зависимости от опции.
* reset -> сбрасывает в пустой массив
* remove -> удаляет значение по индексу
* change -> изменяет значение по индексу
*/

namespace App\Arrays\Lessons\ChangeArray;

function changeArray($array, $method, $index = null, $value = null)
{
    $result = $array;
    
    switch ($method) {
        case "reset":
            $result = [];
            break;
            
        case "remove":
            unset($result[$index]);
            break;
            
        case "change":
            $result[$index] = $value;
            break;
    }
    
    return $result;
}
