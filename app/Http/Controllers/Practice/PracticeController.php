<?php

namespace App\Http\Controllers\Practice;

use App\Http\Controllers\Controller;

class PracticeController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'practice');
    }

    public function index()
    {
        return view('client.practice.index');
    }
}
