<?php

namespace App\OODesign\Challenges;

interface ObjInterface
{
    public function __get($key);
    public function __set($key, $value);
}
