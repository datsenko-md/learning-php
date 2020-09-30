<?php

namespace App\OODesign\Lessons\Converter;

function toStd($array)
{
    $obj = new \stdClass();
    
    foreach ($array as $key => $value) {
        $obj->$key = $value;
    }
    
    return $obj;
}
