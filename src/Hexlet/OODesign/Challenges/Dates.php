<?php

namespace Php\Hexlet\OODesign\Challenges\Dates;

use Carbon\CarbonPeriod;
use Tightenco\Collect\Support;

function buildRange(array $dates, string $begin, string $end): array
{
    $datesByDate = collect($dates)->keyBy('date');
    return collect(CarbonPeriod::create($begin, '1 day', $end))
        ->map(function ($date) {
            return $date->format('d.m.Y');
        })
        ->map(function ($date) use ($datesByDate) {
            return $datesByDate[$date] ?? ['value' => 0, 'date' => $date];
        })
        ->all();
}
