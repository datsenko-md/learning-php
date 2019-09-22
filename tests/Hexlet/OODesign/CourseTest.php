<?php

namespace Tests\Hexlet\OODesign;

use PHPUnit\Framework\TestCase;
use Php\Hexlet\OODesign\Course;

class CourseTest extends TestCase
{
    public function testCourse()
    {
        $name = 'courseName';
        $course = new Course($name);
        $this->assertEquals($name, $course->getName());
    }
}
