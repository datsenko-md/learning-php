<?php

namespace Tests\Functions\Lessons;

use PHPUnit\Framework\TestCase;
use Funct\Strings;

use function App\Functions\Lessons\Slugify\slugify;

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
