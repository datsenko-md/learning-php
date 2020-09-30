<?php

namespace Tests\OOPBasics\Challenges;

use PHPUnit\Framework\TestCase;
use App\OOPBasics\Challenges\Url;

class UrlTest extends TestCase
{
    public function testUrl()
    {
        $url = new Url('http://yandex.ru?key=value&key2=value2');
        $this->assertEquals('http', $url->getScheme());
        $this->assertEquals('yandex.ru', $url->getHost());
        $queryParams = [
            'key' => 'value',
            'key2' => 'value2'
        ];
        $this->assertEquals($queryParams, $url->getQueryParams());
        $this->assertEquals('value2', $url->getQueryParam('key2'));
        $this->assertEquals('value2', $url->getQueryParam('key2', 'bla'));
        $this->assertEquals('bla', $url->getQueryParam('key3', 'bla'));
        $this->assertNull($url->getQueryParam('key3'));
    }
}
