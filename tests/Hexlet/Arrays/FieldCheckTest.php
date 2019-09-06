<?php

namespace Php\Hexlet\Arrays\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Arrays\FieldCheck\fieldCheck;

class FieldCheckTest extends TestCase
{
    public function testFieldCheck()
    {
        $field = [
            array_fill(0, 3, null),
            array_fill(0, 3, null),
            array_fill(0, 3, null)
        ];
        
        $field[1][2] = 'x';
        
        $this->assertTrue(fieldCheck($field, 'x'));
        $this->assertFalse(fieldCheck($field, 'o'));
    }
}
