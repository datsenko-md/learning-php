<?php

namespace Tests\Functions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Functions\Lessons\SayPrimeOrNot\sayPrimeOrNot;

class SayPrimeOrNotTest extends TestCase
{
    public function testSayYes1()
    {
        sayPrimeOrNot(13);
        $this->expectOutputString('yes');
    }

    public function testSayYes2()
    {
        sayPrimeOrNot(2);
        $this->expectOutputString('yes');
    }

    public function testSayNo1()
    {
        sayPrimeOrNot(1);
        $this->expectOutputString('no');
    }

    public function testSayNo2()
    {
        sayPrimeOrNot(0);
        $this->expectOutputString('no');
    }

    public function testSayNo3()
    {
        sayPrimeOrNot(-3);
        $this->expectOutputString('no');
    }

    public function testSayNo4()
    {
        sayPrimeOrNot(9);
        $this->expectOutputString('no');
    }
}
