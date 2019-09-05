<?php

namespace Learning\Php\Hexlet\Tests;

use PHPUnit\Framework\TestCase;
use function Learning\Php\Hexlet\BinarySum\binarySum;

class BinarySumTest extends TestCase
{
    /**
    * @dataProvider additionProvider
    */
    
    public function testBinarySum($sum, $num1, $num2)
    {
        $this->assertEquals($sum, binarySum($num1, $num2));
    }
    
    public function additionProvider()
    {
        return [
            ['0', '0', '0'],
            ['111', '101', '010'],
            ['1100', '101', '111']
        ];
    }
}
