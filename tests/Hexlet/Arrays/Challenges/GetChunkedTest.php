<?php

namespace Tests\Hexlet\Arrays\Challenges;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\Challenges\GetChunked\getChunked;

class GetChunkedTest extends TestCase
{
    public function testGetChunked()
    {
        $actual1 = getChunked(['a', 'b', 'c', 'd'], 2);
        $expected1 = [['a', 'b'], ['c', 'd']];
        $this->assertEquals($expected1, $actual1);
        
        $actual2 = getChunked(['a', 'b', 'c', 'd'], 3);
        $expected2 = [['a', 'b', 'c'], ['d']];
        $this->assertEquals($expected2, $actual2);
    }
}
