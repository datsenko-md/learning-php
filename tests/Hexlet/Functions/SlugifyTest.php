<?php

namespace Tests\Hexlet\Functions;

use PHPUnit\Framework\TestCase;
use Funct\Strings;
use function Php\Hexlet\Functions\Slugify\slugify;

class SlugifyTest extends TestCase
{
    public function testSlugify()
    {
        $data = 'Hello World';
        $actual = slugify($data);
        $expected = Strings\slugify($data);
        $this->assertEquals($expected, $actual);
    }
}
