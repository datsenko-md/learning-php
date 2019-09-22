<?php

namespace Tests\Hexlet\OODesign;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OODesign\Truncater;

class TruncaterTest extends TestCase
{
    public function testTruncate()
    {
        $truncater = new Truncater();
        $actual = $truncater->truncate('one two');
        $this->assertEquals('one two', $actual);
        $actual = $truncater->truncate('one two', ['length' => 3]);
        $this->assertEquals('one...', $actual);
        $actual = $truncater->truncate('one two', ['length' => 3, 'separator' => '@']);
        $this->assertEquals('one@', $actual);
        $actual = $truncater->truncate('one two', ['separator' => '!']);
        $this->assertEquals('one two', $actual);
        
        $truncater = new Truncater(['length' => 3]);
        $actual = $truncater->truncate('one two');
        $this->assertEquals('one...', $actual);
        $actual = $truncater->truncate('one two', ['separator' => '!']);
        $this->assertEquals('one!', $actual);
        $actual = $truncater->truncate('one two', ['length' => 5, 'separator' => '@']);
        $this->assertEquals('one t@', $actual);
    }
}
