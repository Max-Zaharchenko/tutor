<?php

namespace App\Http\Controllers\Api\Admin\Calls;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateSessionRequest;
use App\Interactions\Calls\CreateSessionInteraction;
use App\Models\Call;

class SessionsController extends Controller
{
    public function store(Call $call, CreateSessionRequest $request)
    {
        $this->interact(CreateSessionInteraction::class, [
            'call' => $call,
            'data' => $request->validated(),
        ]);
    }
}
