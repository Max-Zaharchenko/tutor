<?php

namespace App\Http\Controllers\Client\Calls;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CallsController extends Controller
{
    public function index()
    {
        return view('client.calls.index');
    }
}
