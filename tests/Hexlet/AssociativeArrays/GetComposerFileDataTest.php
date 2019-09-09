<?php

namespace Php\Hexlet\AssociativeArrays\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\AssociativeArrays\GetComposerFileData\getComposerFileData;

class GetComposerFileDataTest extends TestCase
{
    public function testGetComposerFileData()
    {
        $path = __DIR__ . '/../../../src/Hexlet/AssociativeArrays/composerTest.json';
        $actual = getComposerFileData();
        $expected = json_decode(file_get_contents($path), true);
        $this->assertEquals($expected, $actual);
    }
}
