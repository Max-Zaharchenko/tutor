<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Courses\CreateCourseRequest;
use App\Interactions\Courses\CreateCourseInteraction;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'courses');
    }

    public function index()
    {
        $courses = Course::query()
                    ->with('lessons')
                    ->paginate();

        return view('admin.courses.index', [
            'courses' => $courses,
        ]);
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(CreateCourseRequest $request)
    {
        $name = str_random(32);
        $imageUrl = $request->file('image')->storePubliclyAs('courses', $name);
        $imageUrl = Storage::url($imageUrl);

        $this->interact(CreateCourseInteraction::class, [
            'data' => [
                'slug'        => str_slug($request->get('title')),
                'title'       => $request->get('title'),
                'description' => $request->get('description'),
                'image_url'   => $imageUrl,
            ],
        ]);

        return redirect()
            ->route('admin.courses.index');
    }

    public function show(Course $course)
    {
        return view('admin.courses.show', [
            'course'  => $course,
            'lessons' => $course->lessons,
        ]);
    }
}
