<?php

namespace Tests\OODesign\Challenges;

use PHPUnit\Framework\TestCase;
use App\OODesign\Challenges\Drunkard;

class DrunkardTest extends TestCase
{
    public function testRun()
    {
        $game = new Drunkard();
        $result = $game->run([1], [2]);
        $this->assertEquals('Second player. Round: 1', $result);

        $result = $game->run([2], [1]);
        $this->assertEquals('First player. Round: 1', $result);

        $result = $game->run([1], [1]);
        $this->assertEquals('Botva!', $result);

        $result = $game->run([1, 2], [3, 2]);
        $this->assertEquals('Second player. Round: 2', $result);

        $result = $game->run([1, 3], [2, 1]);
        $this->assertEquals('First player. Round: 4', $result);
    }
}
