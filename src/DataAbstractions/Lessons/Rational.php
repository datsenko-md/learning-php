<?php

namespace App\DataAbstractions\Lessons\Rational;

use function App\DataAbstractions\Lessons\Gcd\gcd;

function makeRational($numer, $denom)
{
    $gcd = gcd($numer, $denom);
    return [
        'numer' => $numer / $gcd,
        'denom' => $denom / $gcd
    ];
}

function getNumer($rational)
{
    return $rational['numer'];
}

function getDenom($rational)
{
    return $rational['denom'];
}

function ratToString($rat)
{
    return getNumer($rat) . '/' . getDenom($rat);
}

function add($rat1, $rat2)
{
    $numer = getNumer($rat1) * getDenom($rat2) + getNumer($rat2) * getDenom($rat1);
    $denom = getDenom($rat1) * getDenom($rat2);
    return makeRational($numer, $denom);
}

function sub($rat1, $rat2)
{
    $numer = getNumer($rat1) * getDenom($rat2) - getNumer($rat2) * getDenom($rat1);
    $denom = getDenom($rat1) * getDenom($rat2);
    return makeRational($numer, $denom);
}
