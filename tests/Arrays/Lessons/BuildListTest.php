<?php

namespace Tests\Arrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Lessons\BuildList\buildList;

class BuildListTest extends TestCase
{
    public function testBuildList()
    {
        $col = ['milk', 'butter', 'eggs', 'bread'];
        $result = '<ul><li>milk</li><li>butter</li><li>eggs</li><li>bread</li></ul>';
        
        $this->assertEquals($result, buildList($col));
    }
}
