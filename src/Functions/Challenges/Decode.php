<?php

namespace App\Functions\Challenges\Decode;

/*function decode(string $str)
{
    $parts = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);

    ['result' => $signal] = array_reduce($parts, function ($acc, $part) {
        if ($part === '|') {
            $acc['change'] = true;
            $acc['current'] = !$acc['current'];
            return $acc;
        }
        if ($acc['change']) {
            $acc['result'][] = $acc['current'];
            $acc['change'] = false;
            $acc['current'] = !$acc['current'];
            return $acc;
        }

        $acc['result'][] = $acc['current'];
        return $acc;

    }, ['current' => true, 'change' => false, 'result' => []]);

    $bits = array_map(function ($item) {
        return $item ? 0 : 1;
    }, $signal);

    return implode('', $bits);
}*/

function decode($str)
{
    $symbols = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
    
    $mapped = array_map(function ($key) use ($symbols) {
        if ($symbols[$key] === '|') {
            return '|';
        }
        if ($key === 0) {
            return 0;
        }
        return $symbols[$key - 1] === '|' ? 1 : 0;
    }, array_keys($symbols));
    
    $filtered = array_filter($mapped, function ($item) {
        return $item !== '|';
    });
    
    return implode('', $filtered);
}
