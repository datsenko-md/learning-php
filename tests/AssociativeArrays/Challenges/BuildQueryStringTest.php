<?php

namespace Tests\AssociativeArrays\Challenges;

use PHPUnit\Framework\TestCase;

use function App\AssociativeArrays\Challenges\BuildQueryString\buildQueryString;

class BuildQueryStringTest extends TestCase
{
    public function testBuildQueryString()
    {
        $actual = buildQueryString(['per' => 10, 'page' => 1 ]);
        $expected = 'page=1&per=10';
        $this->assertEquals($expected, $actual);
    }
}
