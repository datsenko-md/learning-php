<?php

namespace App\OODesign\Lessons;

class PasswordValidator
{
    private const OPTIONS = [
        'minLength' => 8,
        'containNumbers' => false
    ];
    
    private $options;
    
    public function __construct($options = [])
    {
        $this->options = array_merge(self::OPTIONS, $options);
    }
    
    private function hasNumber($subject)
    {
        return strpbrk($subject, '1234567890') !== false;
    }
    
    public function validate(string $pass)
    {
        $errors = [];
        
        if (strlen($pass) < $this->options['minLength']) {
            $errors['minLength'] = 'too small';
        }
        
        if ($this->options['containNumbers']) {
            if (! $this->hasNumber($pass)) {
                $errors['containNumbers'] = 'should contain at least one number';
            }
        }
        
        return $errors;
    }
}
