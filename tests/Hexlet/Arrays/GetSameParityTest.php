<?php

namespace Php\Hexlet\Arrays\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\GetSameParity\getSameParity;

class GetSameParityTest extends TestCase
{
    public function testGetSameParity()
    {
        $this->assertEquals([], getSameParity([]));
        
        $numbers1 = [5, 6, 1, 3, 6, 4, 9, 7, 0];
        $result1 = [5, 1, 3, 9, 7];
        $this->assertEquals($result1, getSameParity($numbers1));
        
        $numbers2 = [6, 5, 1, 3, 6, 4, 9, 7, 0];
        $result2 = [6, 6, 4, 0];
        $this->assertEquals($result2, getSameParity($numbers2));
    }
}
