<?php

namespace Tests\Hexlet\OODesign;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OODesign\PasswordValidator;

class PasswordValidatorTest extends TestCase
{
    public function testValidateWithDefaultOption()
    {
        $validator = new PasswordValidator();
        
        $errors1 = $validator->validate('qwertyui');
        $this->assertEmpty($errors1);
        
        $errors2 = $validator->validate('qwerty');
        $this->assertEquals([
            'minLength' => 'too small'
        ], $errors2);
        
        $errors3 = $validator->validate('qwertyuiop');
        $this->assertEmpty($errors3);
    }
    
    public function testValidateWithOption()
    {
        $validator = new PasswordValidator([
            'containNumbers' => true
        ]);
        
        $errors1 = $validator->validate('qwe12yui');
        $this->assertEmpty($errors1);
        
        $errors2 = $validator->validate('qwerty');
        $this->assertEquals([
            'minLength' => 'too small',
            'containNumbers' => 'should contain at least one number'
        ], $errors2);
        
        $errors3 = $validator->validate('qw12e');
        $this->assertEquals([
            'minLength' => 'too small'
        ], $errors3);
    }
}
