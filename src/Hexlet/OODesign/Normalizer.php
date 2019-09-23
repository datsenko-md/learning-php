<?php

namespace Php\Hexlet\OODesign\Normalizer;

use Tightenco\Collect\Support;

function normalize(array $row)
{
    return collect($row)
        ->map(function ($value) {
            return array_map('trim', $value);
        })
        ->map(function ($value) {
            return array_map('mb_strtolower', $value);
        })
        ->mapToGroups(function ($item, $key) {
            return [$item['country'] => $item['name']];
        })
        ->map(function ($cities) {
            return $cities->unique()->sort()->values();
        })
        ->sortKeys()
        ->toArray();
}
