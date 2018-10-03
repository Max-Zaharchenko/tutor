<?php

namespace App\Interactions\Courses;

use App\Models\Course;

class CreateCourseInteraction
{
    public function handle(array $data)
    {
        return Course::create($data);
    }
}
