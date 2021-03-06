<?php

namespace App\Http\Controllers\Courses;

use App\Models\Course;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'courses');
    }

    public function index()
    {
        $courses = Course::published()->withCount('lessons')->paginate();

        return view('client.courses.index', [
            'courses' => $courses,
        ]);
    }

    public function show(Course $course)
    {
        $course->load('lessons.words');

        return view('client.courses.show', [
            'course'  => $course,
            'lessons' => $course->getAttribute('lessons')
        ]);
    }
}
