<?php

namespace App\Http\Controllers\Api\Admin\Courses;

use App\Http\Requests\Admin\UpdateLessonWordsRequest;
use App\Http\Controllers\Controller;
use App\Interactions\Courses\SyncWordsInteraction;
use App\Models\Lesson;

class LessonWordsController extends Controller
{
    public function update(Lesson $lesson, UpdateLessonWordsRequest $request)
    {
        $this->interact(SyncWordsInteraction::class, [
            'lesson' => $lesson,
            'words'  => collect($request->get('words')),
        ]);

        return response('', 200);
    }
}
