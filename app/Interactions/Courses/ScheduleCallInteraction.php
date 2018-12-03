<?php

namespace App\Interactions\Courses;

use App\Models\Call;
use App\Models\Course;
use Carbon\Carbon;

class ScheduleCallInteraction
{
    public function handle(Course $course, array $data)
    {
        $data['course_id'] = $course->getKey();
        $data['call_date'] = Carbon::parse($data['call_date']);

        return Call::create($data);
    }
}
