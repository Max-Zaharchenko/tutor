<?php

namespace App\Http\Controllers\Admin\Vocabulary;

use App\Http\Controllers\Controller;

class VocabularyController extends Controller
{
    /**
     * VocabularyController constructor.
     */
    public function __construct()
    {
        view()->share('active', 'vocabulary');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.vocabulary.index');
    }
}
