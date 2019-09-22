<?php

namespace Tests\Hexlet\OODesign;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\OODesign\Converter\toStd;

class ConverterTest extends TestCase
{
    public function testToStd()
    {
        $array = [
            'name' => 'Alex',
            'age' => 25
        ];
        $expected = (object) $array;
        
        $actual = toStd($array);
        $this->assertEquals($expected, $actual);
    }
}
