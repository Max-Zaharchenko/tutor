<?php

namespace App\Http\Controllers\Admin\Calls;

use App\Http\Controllers\Controller;

class CallsController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'calls');
    }

    public function index()
    {
        return view('admin.calls.index');
    }

    public function schedule()
    {
        return view('admin.calls.schedule');
    }
}
