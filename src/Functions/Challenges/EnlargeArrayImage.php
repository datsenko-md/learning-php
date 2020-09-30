<?php

namespace App\Functions\Challenges\EnlargeArrayImage;

function enlargeArrayImage(array $arr)
{
    return array_reduce($arr, function ($acc, $row) {
        $newRow = array_reduce($row, function ($acc, $item) {
            $acc[] = $item;
            $acc[] = $item;
            return $acc;
        }, []);
        
        $acc[] = $newRow;
        $acc[] = $newRow;
        return $acc;
    }, []);
}
