<?php

namespace Php\Hexlet\OODesign\Converter;

function toStd($array)
{
    $obj = new \stdClass();
    
    foreach ($array as $key => $value) {
        $obj->$key = $value;
    }
    
    return $obj;
}
