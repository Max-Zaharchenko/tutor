<?php

namespace App\Http\Controllers\Api\Admin\Calls;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateSessionRequest;
use App\Interactions\Calls\CreateSessionInteraction;
use App\Models\Call;

class SessionsController extends Controller
{
    public function index(Call $call)
    {
        $callSessions = $call->sessions;

        $callSessions->each(function ($session) {
            $session['hour'] = str_before($session->start_at->format('H:i'), ':') . ':**';

            $session['start_date'] = $session->start_at->format('H:i');
            $session['end_date'] = $session->end_at->format('H:i');

            return $session;
        });

        return response()->json([
            'data' => $callSessions->groupBy('hour')
        ]);
    }

    public function store(Call $call, CreateSessionRequest $request)
    {
        $this->interact(CreateSessionInteraction::class, [
            'call' => $call,
            'data' => $request->validated(),
        ]);
    }
}
