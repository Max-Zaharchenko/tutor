<?php

namespace App\Interactions\Lessons;

use App\Models\Course;
use App\Models\Lesson;
use Carbon\Carbon;

class CreateLessonInteraction
{
    public function handle(Course $course, array $data)
    {
        $data['published_at'] = Carbon::createFromFormat('h:i d-m-Y', $data['published_at']->format('h:i d-m-Y'), 'Europe/Moscow')
            ->timezone('UTC');

        $lesson = new Lesson($data);

        $lesson->course()->associate($course);
        $lesson->save();

        return $lesson;
    }
}
