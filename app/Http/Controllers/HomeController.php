<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        view()->share('active', 'dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $courses = $user->courses;
        $courses->load([
            'calls' => function ($query) {
                $query->with('course');
                $query->whereDay('call_date', '>=', now());
            }
        ]);

        $calls = $courses->pluck('calls')->collapse();

        return view('home', [
            'user'  => $user,
            'calls' => $calls,
        ]);
    }
}
