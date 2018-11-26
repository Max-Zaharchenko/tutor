<?php

namespace App\Http\Controllers\Api\Admin\Vocabulary;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateWordRequest;
use App\Http\Resources\Admin\WordResource;
use App\Interactions\Vocabulary\CreateWordInteraction;
use App\Models\Word;

class VocabularyController extends Controller
{
    public function index()
    {
        return WordResource::collection(Word::paginate());
    }

    /**
     * @param CreateWordRequest $request
     * @return WordResource
     */
    public function store(CreateWordRequest $request)
    {
        $word = $this->interact(CreateWordInteraction::class, [
            'data' => $request->validated(),
        ]);

        return new WordResource($word);
    }
}
