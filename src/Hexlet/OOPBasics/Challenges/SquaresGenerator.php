<?php

namespace Php\Hexlet\OOPBasics\Challenges;

class SquaresGenerator
{
    public static function generate($side, $num = 5)
    {
        $squares = [];
        for ($i = 0; $i < $num; $i++) {
            $squares[] = new Square($side);
        }
        return $squares;
    }
}
