<?php

namespace App\Interactions\Lessons;

use App\Models\Course;
use App\Models\Lesson;
use Carbon\Carbon;

class CreateLessonInteraction
{
    public function handle(Course $course, array $data)
    {
        $data['published_at'] = Carbon::createFromFormat('d-m-Y', $data['published_at']->format('d-m-Y'), 'Europe/Moscow')
            ->setTime('12', '00')
            ->timezone('UTC');

        $lesson = new Lesson($data);

        $lesson->course()->associate($course);
        $lesson->save();

        return $lesson;
    }
}
