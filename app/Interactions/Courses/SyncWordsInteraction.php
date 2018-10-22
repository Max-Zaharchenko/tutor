<?php

namespace App\Interactions\Courses;

use App\Models\Lesson;
use Illuminate\Support\Collection;

class SyncWordsInteraction
{
    public function handle(Lesson $lesson, Collection $words)
    {
        $words = $words->map(function ($word) use ($lesson) {
            $word = $lesson->words()->firstOrCreate([
                'original'    => $word['original'],
                'translation' => $word['translation'],
            ]);

            return $word->getKey();
        });

        $lesson->words()->whereNotIn('id', $words->toArray())->delete();
    }
}
