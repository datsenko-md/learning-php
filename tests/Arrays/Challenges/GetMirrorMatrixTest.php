<?php

namespace Tests\Arrays\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Challenges\GetMirrorMatrix\getMirrorMatrix;

class GetMirrorMatrixTest extends TestCase
{
    public function testGetMirrorMatrix()
    {
        $actual = getMirrorMatrix([
            [11, 12, 13, 14],
            [21, 22, 23, 24],
            [31, 32, 33, 34],
            [41, 42, 43, 44],
        ]);
        
        $expected = [
            [11, 12, 12, 11],
            [21, 22, 22, 21],
            [31, 32, 32, 31],
            [41, 42, 42, 41],
        ];
        
        $this->assertEquals($expected, $actual);
    }
}
