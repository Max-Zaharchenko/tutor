<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Courses\CreateLessonRequest;
use App\Interactions\Lessons\CreateLessonInteraction;
use App\Models\Course;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class LessonsController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'courses');
    }

    public function create(Course $course)
    {
        $defaultPublishedAtDate = now()->addDay();

        if (($latestLesson = $course->lessons()->latest()->first())) {
            if ($latestLesson->published_at) {
                $defaultPublishedAtDate = $latestLesson->published_at->addDay();
            }
        }

        return view('admin.lessons.create', [
            'course' => $course,
            'defaultPublishedAtDate' => $defaultPublishedAtDate->timezone('Europe/Moscow')->format('h:i d-m-Y'),
        ]);
    }

    public function store(Course $course, CreateLessonRequest $request)
    {
        $name = str_random(32) . '.mp4';
        $videoUrl = $request->file('video')->storePubliclyAs('lessons', $name);
        $videoUrl = Storage::url($videoUrl);

        $this->interact(CreateLessonInteraction::class, [
            'course' => $course,
            'data' => [
                'slug'         => str_slug($request->get('title')),
                'title'        => $request->get('title'),
                'description'  => $request->get('description'),
                'published_at' => Carbon::parse($request->get('published_at')),
                'video_url'    => $videoUrl,
            ]
        ]);

        return redirect(route('admin.courses.show', [
            'course' => $course->slug,
        ]));
    }

    public function show(Course $course, Lesson $lesson)
    {
        $lesson->load('words');

        return view('admin.lessons.show', [
            'course'  => $course,
            'lesson'  => $lesson,
            'lessons' => $course->lessons,
        ]);
    }
}
