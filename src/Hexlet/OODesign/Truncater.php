<?php

namespace Php\Hexlet\OODesign;

class Truncater
{
    const OPTIONS = [
        'separator' => '...',
        'length' => 200
    ];
    
    private $options = [];
    
    public function __construct($options = [])
    {
        $this->options = array_merge(self::OPTIONS, $options);
    }
    
    public function truncate($str, $options = [])
    {
        $tempOptions = array_merge($this->options, $options);
        
        $length = strlen($str);
        if ($length > $tempOptions['length']) {
            $newStr = substr($str, 0, $tempOptions['length']);
            $truncated = "{$newStr}{$tempOptions['separator']}";
        }
        
        return $truncated ?? $str;
    }
}
