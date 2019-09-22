<?php

namespace Php\Hexlet\OODesign;

class Course
{
    public $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
}
