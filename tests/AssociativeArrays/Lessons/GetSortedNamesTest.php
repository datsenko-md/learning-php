<?php

namespace Tests\AssociativeArrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\AssociativeArrays\Lessons\GetSortedNames\getSortedNames;

class GetSortedNamesTest extends TestCase
{
    public function testGetSortedNames()
    {
        $users = [
            ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
            ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
            ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
            ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
        ];

        $actual = getSortedNames($users);
        $expected = ['Bronn', 'Eiegon', 'Reigar', 'Sansa'];
        $this->assertEquals($expected, $actual);
    }
}
