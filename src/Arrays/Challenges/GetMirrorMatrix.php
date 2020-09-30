<?php

/*
Функция зеркалирует переданную матрицу
*/

namespace App\Arrays\Challenges\GetMirrorMatrix;

function getMirrorMatrix(array $matrix)
{
    $result = [];
    $size = sizeof($matrix);

    foreach ($matrix as $row) {
        for ($i = 0, $j = $size - 1; $i < $size / 2; $i++, $j--) {
            $row[$j] = $row[$i];
        }
        
        $result[] = $row;
    }
    
    return $result;
}
