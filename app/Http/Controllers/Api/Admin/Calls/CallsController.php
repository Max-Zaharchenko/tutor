<?php

namespace App\Http\Controllers\Api\Admin\Calls;

use App\Http\Resources\Admin\CallResource;
use App\Models\Call;
use App\Http\Controllers\Controller;

class CallsController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $calls = Call::query()
            ->with('course')
            ->orderBy('call_date', 'ASC')
            ->get();

        return CallResource::collection($calls);
    }

    /**
     * @param Call $call
     * @return CallResource
     */
    public function show(Call $call)
    {
        $call->load(['course', 'sessions']);

        return new CallResource($call);
    }
}
