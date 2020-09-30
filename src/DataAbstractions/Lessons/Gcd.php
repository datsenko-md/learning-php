<?php

namespace App\DataAbstractions\Lessons\Gcd;

function gcd($a, $b)
{
    return $a % $b === 0 ? abs($b) : gcd($b, $a % $b);
}
