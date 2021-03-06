<?php

namespace Tests\Functions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Functions\Lessons\GetFreeDomainsCount\getFreeDomainsCount;

class GetFreeDomainsCountTest extends TestCase
{
    public function testGetFreeDomainsCount()
    {
        $emails = [
            'info@gmail.com',
            'info@yandex.ru',
            'info@hotmail.com',
            'mk@host.com',
            'support@hexlet.io',
            'key@yandex.ru',
            'sergey@gmail.com',
            'vovan@gmail.com',
            'vovan@hotmail.com'
        ];
        
        $actual = getFreeDomainsCount($emails);
        
        $expected = [
            'gmail.com' => 3,
            'yandex.ru' => 2,
            'hotmail.com' => 2
        ];
        
        $this->assertEquals($expected, $actual);
    }
}
