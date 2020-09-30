<?php

namespace App\OODesign\Lessons\Normalizer;

use Tightenco\Collect\Support;

use function Stringy\create as s;

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

function getQuestions($text)
{
    $lines = s($text)->lines();
    $filtered = collect($lines)->filter(function ($line) {
        return $line->endsWith('?');
    });
    
    return implode("\n", $filtered->all());
}
