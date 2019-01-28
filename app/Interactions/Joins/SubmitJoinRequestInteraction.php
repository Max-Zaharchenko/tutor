<?php

namespace App\Interactions\Joins;

use App\Events\Joins\JoinReceived;
use App\Models\Join;

class SubmitJoinRequestInteraction
{
    /**
     * Create a new Join.
     *
     * @param array $data
     * @return mixed
     */
    public function handle(array $data = [])
    {
        return tap(Join::create($data), function ($join) {
            event(new JoinReceived($join));
        });
    }
}
