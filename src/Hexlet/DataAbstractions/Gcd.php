<?php

namespace Php\Hexlet\DataAbstractions\Gcd;

function gcd($a, $b)
{
    return $a % $b === 0 ? abs($b) : gcd($b, $a % $b);
}
