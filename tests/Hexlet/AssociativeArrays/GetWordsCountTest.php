<?php

namespace Php\Hexlet\AssociativeArrays\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\AssociativeArrays\GetWordsCount\getWordsCount;

class GetWordsCountTest extends TestCase
{
    public function testGetWordsCount()
    {
        $content = 'cat dog cat eye see cat dog';
        $actual = getWordsCount($content);
        $expected =  [
            'cat' => 3,
            'dog' => 2,
            'eye' => 1,
            'see' => 1
        ];
        $this->assertEquals($expected, $actual);
    }
}
