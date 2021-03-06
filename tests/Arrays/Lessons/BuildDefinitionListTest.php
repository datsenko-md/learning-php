<?php

namespace Tests\Arrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Lessons\BuildDefinitionList\buildDefinitionList;

class BuildDefinitionListTest extends TestCase
{
    public function testBuildDefinitionList()
    {
        $definitions = [
            ['key', 'value'],
            ['key2', 'value2'],
        ];
        $expected = '<dl><dt>key</dt><dd>value</dd><dt>key2</dt><dd>value2</dd></dl>';
        $actual = buildDefinitionList($definitions);
        $this->assertEquals($expected, $actual);
        
        $expected2 = '';
        $actual2 = buildDefinitionList([]);
        $this->assertEquals($expected2, $actual2);
    }
}
