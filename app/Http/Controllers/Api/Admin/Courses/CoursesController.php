<?php

namespace App\Http\Controllers\Api\Admin\Courses;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\CourseResource;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        return CourseResource::collection(Course::all());
    }
}
