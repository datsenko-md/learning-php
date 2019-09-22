<?php

namespace Php\Hexlet\OOPBasics\Challenges;

interface UrlInterface
{
    public function getScheme();
    public function getHost();
    public function getQueryParams();
    public function getQueryParam($key, $defaultValue = null);
}
