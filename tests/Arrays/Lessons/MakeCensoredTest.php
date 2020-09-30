<?php

namespace Tests\Arrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Lessons\MakeCensored\makeCensored;

class MakeCensoredTest extends TestCase
{
    public function testMakeCensored()
    {
        $sentence = 'When you play the game of thrones, you win or you die';
        $actual = makeCensored($sentence, ['die', 'play']);
        $expected = 'When you $#%! the game of thrones, you win or you $#%!';
        $this->assertEquals($expected, $actual);
        
        $sentence2 = 'chicken chicken? chicken! chicken';
        $actual2 = makeCensored($sentence2, ['?', 'chicken']);
        $expected2 = '$#%! chicken? chicken! $#%!';
        $this->assertEquals($expected2, $actual2);
    }
}
