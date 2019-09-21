<?php

namespace Php\Hexlet\OOPBasics\Safe;

function json_decode($json, $assoc = false)
{
    $data = \json_decode($json, $assoc);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new \Exception(json_last_error_msg());
    }
    
    return $data;
}
