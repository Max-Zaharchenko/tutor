<?php

namespace App\Interactions\Vocabulary;

use App\Models\Word;

class CreateWordInteraction
{
    /**
     * Create a new word.
     *
     * @param array $data
     * @return mixed
     */
    public function handle(array $data)
    {
        return Word::create($data);
    }
}
