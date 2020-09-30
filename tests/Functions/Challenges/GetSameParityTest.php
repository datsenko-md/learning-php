<?php

namespace Tests\Functions\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Functions\Challenges\GetSameParity\getSameParity;

class GetSameParityTest extends TestCase
{
    public function testGetSameParity()
    {
        $this->assertEquals([], getSameParity([]));
        $this->assertEquals([-1, 1, -3], getSameParity([-1, 0, 1, -3, 10, -2]));
    }
}
