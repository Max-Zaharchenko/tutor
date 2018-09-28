<?php

namespace App\Policies\Courses;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    public function owns(User $user, Course $course, Lesson $lesson)
    {
        return $course->getKey() == $lesson->getAttribute('course_id');
    }
}
