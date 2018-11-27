<?php

namespace App\Http\Controllers\Admin\Calls;

use App\Http\Controllers\Controller;
use App\Models\Call;

class CallsController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'calls');
    }

    public function index()
    {
        return view('admin.calls.index', [
            'calls' => Call::all(),
        ]);
    }

    public function schedule()
    {
        return view('admin.calls.schedule');
    }
}
