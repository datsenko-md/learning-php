<?php

namespace Tests\Hexlet\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\AssociativeArrays\GenDiff\genDiff;

class GenDiffTest extends TestCase
{
    public function testGenDiff()
    {
        $actual = genDiff(
            ['one' => 'eon', 'two' => 'two', 'four' => true],
            ['two' => 'own', 'zero' => 4, 'four' => true]
        );
        
        $expected = [
             'one' => 'deleted',
             'two' => 'changed',
             'zero' => 'added',
             'four' => 'unchanged',
        ];
        
        $this->assertEquals($expected, $actual);
    }
}
