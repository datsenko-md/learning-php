<?php

namespace Php\Hexlet\AssociativeArrays\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Hexlet\AssociativeArrays\GetIn\getIn;

class GetInTest extends TestCase
{
    public function testGetIn()
    {
        $data = [
            'user' => 'ubuntu',
            'hosts' => [
                ['name' => 'web1'],
                ['name' => 'web2']
            ]
        ];

        $this->assertEquals('ubuntu', getIn($data, ['user']));
        $this->assertEquals(null, getIn($data, ['undefined']));
        $this->assertEquals(null, getIn($data, ['user', 'ubuntu']));
        $this->assertEquals('web2', getIn($data, ['hosts', 1, 'name']));
        $this->assertEquals(['name' => 'web1'], getIn($data, ['hosts', 0]));
    }
}
