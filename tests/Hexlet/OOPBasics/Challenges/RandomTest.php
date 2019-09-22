<?php

namespace Tests\Hexlet\OOPBasics\Challenges;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OOPBasics\Challenges\Random;

class RandomTest extends TestCase
{
    public function testRandom1()
    {
        $seq = new Random(100);
        $result1 = $seq->getNext();
        $result2 = $seq->getNext();
        
        $this->assertNotEquals($result1, $result2);
        
        $seq2 = new Random(100);
        $result21 = $seq2->getNext();
        $result22 = $seq2->getNext();
        
        $this->assertEquals($result1, $result21);
        $this->assertEquals($result2, $result22);
    }
    
    public function testRandom2()
    {
        $seq = new Random(100);
        $result1 = $seq->getNext();
        $result2 = $seq->getNext();
        
        $seq->reset();
        
        $result21 = $seq->getNext();
        $result22 = $seq->getNext();
        
        $this->assertEquals($result1, $result21);
        $this->assertEquals($result2, $result22);
    }
}
