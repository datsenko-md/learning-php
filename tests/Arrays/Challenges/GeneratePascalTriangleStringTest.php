<?php

namespace Tests\Arrays\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Challenges\GeneratePascalTriangleString\generatePascalTriangleString;

class GeneratePascalTriangleStringTest extends TestCase
{
    public function testGeneratePascalTriangleString()
    {
        $this->assertEquals([1], generatePascalTriangleString(0));
        $this->assertEquals([1, 1], generatePascalTriangleString(1));
        $this->assertEquals([1, 4, 6, 4, 1], generatePascalTriangleString(4));
    }
}
