<?php

namespace Tests\Hexlet\AssociativeArrays;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\AssociativeArrays\Pick\pick;

class PickTest extends TestCase
{
    public function testPick()
    {
        $data = [
            'user' => 'ubuntu',
            'cores' => 4,
            'os' => 'linux'
        ];

        $this->assertEquals(['user' => 'ubuntu'], pick($data, ['user']));
        $this->assertEquals(['user' => 'ubuntu', 'os' => 'linux'], pick($data, ['user', 'os']));
        $this->assertEquals([], pick($data, []));
        $this->assertEquals([], pick($data, ['none']));
    }
}
