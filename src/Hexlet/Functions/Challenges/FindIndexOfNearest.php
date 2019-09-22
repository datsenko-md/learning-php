<?php

namespace Php\Hexlet\Functions\Challenges\FindIndexOfNearest;

//function findIndexOfNearest(array $items, $value)
//{
//    if (empty($items)) {
//        return null;
//    }
//
//    $distances = array_map(function ($item) use ($value) {
//        return abs($item - $value);
//    }, $items);
//
//    $minDistance = array_reduce($distances, function ($min, $distance) {
//        if ($distance < $min) {
//            $min = $distance;
//        }
//        return $min;
//    }, $distances[0]);
//
//    $minDistances = array_filter($distances, function ($distance) use ($minDistance) {
//        return $distance === $minDistance;
//    });
//
//    [$smallestIndexOfMin] = array_keys($minDistances);
//
//    return $smallestIndexOfMin;
//}

function findIndexOfNearest(array $items, $value)
{
    if (empty($items)) {
        return null;
    }
    
    return array_reduce(array_keys($items), function ($acc, $i) use ($items, $value) {
        return abs($items[$i] - $value) < abs($items[$acc] - $value) ? $i : $acc;
    }, 0);
}
