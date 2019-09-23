<?php

namespace Php\Hexlet\OODesign\Challenges;

class Obj implements \ArrayAccess, ObjInterface
{
    private $properties = [];
    
    public function __construct($properties)
    {
        foreach ($properties as $key => $value) {
            if (is_array($value)) {
                $this->properties[$key] = new self($value);
            } else {
                $this->properties[$key] = $value;
            }
        }
    }
    
    public function __get($key)
    {
        return $this->properties[$key] ?? null;
    }
    
    public function __set($key, $value)
    {
        $this->properties[$key] = $value;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->properties[$$offset]);
    }
    
    public function offsetGet($offset)
    {
        return $this->properties[$offset] ?? null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->properties[] = $value;
        } else {
            $this->properties[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->properties[$offset]);
    }
}
