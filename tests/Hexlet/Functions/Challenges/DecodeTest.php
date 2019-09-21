<?php

namespace Tests\Hexlet\Functions\Challenges;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Functions\Challenges\Decode\decode;

class DecodeTest extends TestCase
{
    public function testDecode()
    {
        $signal = '_|¯|____|¯|__|¯¯¯';
        $actual = decode($signal);
        $expected = '011000110100';
        $this->assertEquals($expected, $actual);

        $signal2= '|¯|___|¯¯¯¯¯|___|¯|_|¯';
        $actual2 = decode($signal2);
        $expected2 = '110010000100111';
        $this->assertEquals($expected2, $actual2);

        $signal3= '¯|___|¯¯¯¯¯|___|¯|_|¯';
        $actual3 = decode($signal3);
        $expected3 = '010010000100111';
        $this->assertEquals($expected3, $actual3);
        
    }
}
