<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Requests\Api\JoinRequest;
use App\Http\Controllers\Controller;
use App\Interactions\Joins\SubmitJoinRequestInteraction;

class JoinsController extends Controller
{
    /**
     * Create a new join.
     *
     * @param JoinRequest $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(JoinRequest $request)
    {
        $data = $request->validated();
        $data['ip_address'] = $request->ip();

        $this->interact(SubmitJoinRequestInteraction::class, [
            'data' => $data,
        ]);

        return response('', 204);
    }
}
