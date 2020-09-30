<?php

/*
gegrgr
*/

namespace App\Arrays\Challenges\GeneratePascalTriangleString;

function creatеRow($num, $triangle)
{
    $row = [];
    for ($i = 0; $i <= $num; $i++) {
        $prevLine = $num - 1;
        $prevCol = $i - 1;
        $currCol = $i;
        if (!isset($triangle[$prevLine][$currCol]) || !isset($triangle[$prevLine][$prevCol])) {
            $row[] = 1;
        } else {
            $row[] = $triangle[$prevLine][$currCol] + $triangle[$prevLine][$prevCol];
        }
    }
    return $row;
}

function generatePascalTriangleString($num)
{
    $triangle = [];
    
    for ($i = 0; $i <= $num; $i++) {
        $triangle[] = creatеRow($i, $triangle);
    }
    
    return $triangle[$num];
}
