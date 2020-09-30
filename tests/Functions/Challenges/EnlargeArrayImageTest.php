<?php

namespace Tests\Functions\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Functions\Challenges\EnlargeArrayImage\enlargeArrayImage;

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
