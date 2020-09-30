<?php

namespace App\OOPBasics\Lessons;

interface DecartPointInterface
{
    public function __construct($x, $y);
    public function getX();
    public function getY();
}
