<?php

namespace Tests\Hexlet\Functions\Challenges;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\Functions\Challenges\EnlargeArrayImage\enlargeArrayImage;

class EnlargeArrayImageTest extends TestCase
{
    public function testEnlargeArrayImage()
    {
        $arr = [
            ['*','*','*','*'],
            ['*',' ',' ','*'],
            ['*',' ',' ','*'],
            ['*','*','*','*']
        ];
        
        $actual = enlargeArrayImage($arr);
        
        $expected = [
            ['*','*','*','*','*','*','*','*'],
            ['*','*','*','*','*','*','*','*'],
            ['*','*',' ',' ',' ',' ','*','*'],
            ['*','*',' ',' ',' ',' ','*','*'],
            ['*','*',' ',' ',' ',' ','*','*'],
            ['*','*',' ',' ',' ',' ','*','*'],
            ['*','*','*','*','*','*','*','*'],
            ['*','*','*','*','*','*','*','*']
        ];
        
        $this->assertEquals($expected, $actual);
    }
}
