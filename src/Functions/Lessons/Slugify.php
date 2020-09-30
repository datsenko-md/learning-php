<?php

/*
Собственная версия Funct\Strings\slugify
*/

namespace App\Functions\Lessons\Slugify;

use Funct\Strings;
use Funct\Collection;

function slugify($str)
{
    $lowerStr = Strings\toLower($str);
    $parts = explode(' ', $lowerStr);
    $words = Collection\compact($parts);
    return implode('-', $words);
}
