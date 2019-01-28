<?php

namespace App\Interactions\Joins;

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
        return Join::create($data);
    }
}
