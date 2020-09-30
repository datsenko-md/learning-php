<?php

namespace Tests\OODesign\Lessons;

use PHPUnit\Framework\TestCase;

use function App\OODesign\Lessons\Converter\toStd;

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
