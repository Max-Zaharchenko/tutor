<?php

namespace App\Interactions\Invites;

use App\Models\Invite;

class CreateInviteInteraction
{
    public function handle(array $data)
    {
        $data['code'] = str_random(64);

        return Invite::create($data);
    }
}
