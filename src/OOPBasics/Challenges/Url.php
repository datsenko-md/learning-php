<?php

namespace App\OOPBasics\Challenges;

class Url implements UrlInterface
{
    private $data;
    
    public function __construct($url)
    {
        $this->data = parse_url($url);
        $queryParams = [];
        if (isset($this->data['query'])) {
            parse_str($this->data['query'], $queryParams);
        }
        $this->data['query'] = $queryParams;
    }
    
    public function getScheme()
    {
        return $this->data['scheme'];
    }
    
    public function getHost()
    {
        return $this->data['host'];
    }
    
    public function getQueryParams()
    {
        return $this->data['query'];
    }
    
    public function getQueryParam($key, $defaultValue = null)
    {
        return $this->data['query'][$key] ?? $defaultValue;
    }
}
