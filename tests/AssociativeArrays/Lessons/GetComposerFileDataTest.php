<?php

namespace Tests\AssociativeArrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\AssociativeArrays\Lessons\GetComposerFileData\getComposerFileData;

class GetComposerFileDataTest extends TestCase
{
    public function testGetComposerFileData()
    {
        $path = __DIR__ . '/../../../src/AssociativeArrays/Lessons/composerTest.json';
        $actual = getComposerFileData();
        $expected = json_decode(file_get_contents($path), true);
        $this->assertEquals($expected, $actual);
    }
}
