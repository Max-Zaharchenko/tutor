<?php

namespace App\Interactions\Lessons;

use App\Models\Course;
use App\Models\Lesson;

class CreateLessonInteraction
{
    public function handle(Course $course, array $data)
    {
        $lesson = new Lesson($data);

        $lesson->course()->associate($course);
        $lesson->save();

        return $lesson;
    }
}
