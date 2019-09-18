<?php

namespace Php\Hexlet\DataAbstractions\Challenges\Url;

function make($url)
{
    $data = parse_url($url);
    $queryParams = [];
    if (isset($data['query'])) {
        parse_str($data['query'], $queryParams);
    }
    $data['query'] = $queryParams;
    return $data;
}

function setScheme($data, $scheme)
{
    $data['scheme'] = $scheme;
    return $data;
}

function getScheme($data)
{
    return $data['scheme'];
}

function setHost($data, $host)
{
    $data['host'] = $host;
    return $data;
}

function getHost($data)
{
    return $data['host'];
}

function setPath($data, $path)
{
    $data['path'] = $path;
    return $data;
}

function getPath($data)
{
    return isset($data['path']) ? $data['path'] : null;
}

function setQueryParam($data, $key, $value)
{
    $data['query'][$key] = $value;
    return $data;
}

function getQueryParam($data, $paramName, $default = null)
{
    return $data['query'][$paramName] ?? $default;
}

function getAllQueryParams($data)
{
    return $data['query'] ?? [];
}

function toString($data)
{
    $scheme = getScheme($data);
    $host = getHost($data);
    $path = getPath($data);
    $query = http_build_query(getAllQueryParams($data));
    $query = empty($query) ? $query : "?{$query}";
    
    return "{$scheme}://{$host}{$path}{$query}";
}
