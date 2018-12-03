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
        return CallResource::collection(Call::all());
    }
}
