<?php

namespace App\OOPBasics\Lessons;

use App\OOPBasics\Lessons\Comparable;

class User implements Comparable
{
    private $id;
    private $name;
    
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function compareTo(User $user)
    {
        return $this->getId() === $user->getId();
    }
}
