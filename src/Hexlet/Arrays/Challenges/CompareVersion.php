<?php

/*
Функция определяет, какая из версий большая
если
v1 > v2 => 1
v1 < v2 => -1
v1 = v2 => 0
*/

namespace Php\Hexlet\Arrays\Challenges\CompareVersion;

function compareVersion($ver1, $ver2)
{
    $version1 = explode('.', $ver1);
    $version2 = explode('.', $ver2);
    
    return $version1 <=> $version2;
}
