<?php

namespace Tests\AssociativeArrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\AssociativeArrays\Lessons\Pick\pick;

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
