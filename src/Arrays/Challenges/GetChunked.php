<?php

/*
Функция выполняет чанкование входного массива
*/

namespace App\Arrays\Challenges\GetChunked;

/*
function getChunked(array $arr, $sizeOfChunk)
{
    $count = 0;
    $result = [];
    $chunk = [];
    foreach ($arr as $value) {
        if ($count === $sizeOfChunk) {
            $result[] = $chunk;
            $chunk = [];
            $count = 0;
        }

        $chunk[] = $value;
        $count++;
    }

    if (!empty($chunk)) {
        $result[] = $chunk;
    }

    return $result;
}
*/

function getChunked(array $arr, $size)
{
    $result = [];
    
    for ($i = 0, $length = count($arr); $i < $length; $i += $size) {
        $result[] = array_slice($arr, $i, $size);
    }
    
    return $result;
}
