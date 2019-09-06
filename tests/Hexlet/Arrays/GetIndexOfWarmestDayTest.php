<?php

namespace Php\Hexlet\Arrays\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\GetIndexOfWarmestDay\getIndexOfWarmestDay;

class GetIndexOfWarmestDayTest extends TestCase
{
    public function testGetIndexOfWarmestDay()
    {
        $actual1 = getIndexOfWarmestDay([]);
        $this->assertNull($actual1);
        
        $data2 = [
            [-1, 3, 2],
            [0, 4, 5],
            [2, 7, 10],
        ];
        $actual2 = getIndexOfWarmestDay($data2);
        $this->assertEquals(2, $actual2);
        
        $data3 = [
            [-1, 3, 2],
            [2, 7, 10],
            [0, 4, 5],
        ];
        $actual3 = getIndexOfWarmestDay($data3);
        $this->assertEquals(1, $actual3);
        
        $data4 = [
            [-1, 3, 2],
            [2, 7, 10],
            [0, 10, 5],
        ];
        $actual4 = getIndexOfWarmestDay($data4);
        $this->assertEquals(2, $actual4);
    }
}
