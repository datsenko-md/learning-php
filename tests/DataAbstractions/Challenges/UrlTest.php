<?php

namespace Tests\DataAbstractions\Challenges;

use PHPUnit\Framework\TestCase;
use App\DataAbstractions\Challenges\Url;

class UrlTest extends TestCase
{
    public function testUrl()
    {
        $url = Url\make('https://hexlet.io/community?q=low');
        
        $url = Url\setScheme($url, 'http');
        $this->assertEquals('http://hexlet.io/community?q=low', Url\toString($url));

        $url = Url\setPath($url, '/404');
        $this->assertEquals('http://hexlet.io/404?q=low', Url\toString($url));

        $url = Url\setQueryParam($url, 'page', 5);
        $this->assertEquals('http://hexlet.io/404?q=low&page=5', Url\toString($url));

        $url = Url\setQueryParam($url, 'q', 'high');
        $this->assertEquals('http://hexlet.io/404?q=high&page=5', Url\toString($url));

        $url = Url\setQueryParam($url, 'q', null);
        $this->assertEquals('http://hexlet.io/404?page=5', Url\toString($url));
    }
    
    public function testUrlWithEmptyParams()
    {
        $url = Url\make('https://hexlet.io/?q=low');
        $this->assertEquals('https://hexlet.io/?q=low', Url\toString($url));
    }
    
    public function testUrlWithEmptyPath()
    {
        $url = Url\make('https://hexlet.io/community');
        $this->assertEquals('https://hexlet.io/community', Url\toString($url));
    }
}
