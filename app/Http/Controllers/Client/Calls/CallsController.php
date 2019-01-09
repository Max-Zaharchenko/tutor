<?php

namespace App\Http\Controllers\Client\Calls;

use App\Models\Call;
use App\Http\Controllers\Controller;

class CallsController extends Controller
{
    /**
     * CallsController constructor.
     */
    public function __construct()
    {
        view()->share('active', 'calls');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $calls = Call::query()->with('course')->get();

        return view('client.calls.index', [
            'calls' => $calls,
        ]);
    }
}
