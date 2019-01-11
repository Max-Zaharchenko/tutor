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
        $calls = Call::query()
                    ->withCount([
                        'sessions as students_applied' => function ($query) {
                            $query->haveAppliedStudents();
                        }
                    ])
                    ->with([
                        'course' => function ($query) {
                            $query->withCount('users');
                        }
                    ])
                    ->get();

        $calls->each(function ($call) {
            $call->unregistered_students = $call->course->users_count - $call->students_applied;
        });

        return view('admin.calls.index', [
            'calls' => $calls,
        ]);
    }

    public function show(Call $call)
    {
        return view('admin.calls.show', [
            'call' => $call,
        ]);
    }
}
