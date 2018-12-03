<?php

namespace App\Http\Controllers\Api\Admin\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ScheduleCallRequest;
use App\Http\Resources\Admin\CallResource;
use App\Interactions\Courses\ScheduleCallInteraction;
use App\Models\Course;

class CallsController extends Controller
{
    /**
     * Schedule a new call for the course.
     *
     * @param Course $course
     * @param ScheduleCallRequest $request
     * @return CallResource
     */
    public function store(Course $course, ScheduleCallRequest $request)
    {
        $call = $this->interact(ScheduleCallInteraction::class, [
            'course' => $course,
            'data' => $request->validated(),
        ]);

        return new CallResource($call);
    }
}
