<?php

namespace App\OODesign\Lessons;

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
