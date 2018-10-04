<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;

class LessonsController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'courses');
    }

    public function show(Course $course, Lesson $lesson)
    {
        $this->authorize('owns', [$course, $lesson]);

        return view('client.lessons.show', [
            'course'  => $course,
            'lessons' => $course->lessons,
            'lesson'  => $lesson,
        ]);
    }
}
