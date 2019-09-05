<?php

/*
* Функция проверяет, являетсяя ли последовательность
* непрерывно возрастающей. Шаг роста равен 1.
*/

namespace Php\Hexlet\Arrays\IsContinuousSequence;

/*
function isContinuousSequence(array $seq)
{
    if ($seq === []) {
        return false;
    }

    $continuousSeq = [];

    $begin = $seq[0];
    $end = $seq[count($seq) - 1];

    for ($i = $begin; $i <= $end; $i++) {
        $continuousSeq[] = $i;
    }

    return $continuousSeq === $seq;
}
*/

// Еще одна реализация

function isContinuousSequence(array $col)
{
    if (empty($col)) {
        return false;
    }
    
    $start = $col[0];
    
    foreach ($col as $i => $item) {
        if ($start + $i !== $item) {
            return false;
        }
    }
    
    return true;
}
