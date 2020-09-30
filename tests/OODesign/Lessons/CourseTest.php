<?php

namespace Tests\OODesign\Lessons;

use PHPUnit\Framework\TestCase;
use App\OODesign\Lessons\Course;

class CourseTest extends TestCase
{
    public function testCourse()
    {
        $name = 'courseName';
        $course = new Course($name);
        $this->assertEquals($name, $course->getName());
    }
}
