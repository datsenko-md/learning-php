<?php

namespace Tests\AssociativeArrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\AssociativeArrays\Lessons\GetWordsCount\getWordsCount;

class GetWordsCountTest extends TestCase
{
    public function testGetWordsCount()
    {
        $content = 'cat dog cat eye see cat dog';
        $actual = getWordsCount($content);
        $expected =  [
            'cat' => 3,
            'dog' => 2,
            'eye' => 1,
            'see' => 1
        ];
        $this->assertEquals($expected, $actual);
    }
}
