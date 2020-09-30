<?php

namespace Tests\OODesign\Lessons;

use PHPUnit\Framework\TestCase;

use function App\OODesign\Lessons\Comparator\compare;

class CompareTest extends TestCase
{
    public function testCompare()
    {
        $this->assertTrue(compare('abc', 'abc'));
        $this->assertTrue(compare('ab#c', 'ab#c'));
        $this->assertTrue(compare('abb##c', 'ac'));
        $this->assertTrue(compare('a#', ''));
        $this->assertTrue(compare('#a', 'a'));
        
        $this->assertFalse(compare('abc', 'acd'));
        $this->assertFalse(compare('ab#c', 'a#bc'));
    }
}
