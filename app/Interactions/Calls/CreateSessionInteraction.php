<?php

namespace App\Interactions\Calls;

use App\Models\Call;

class CreateSessionInteraction
{
    public function handle(Call $call, array $data)
    {
        $day = $call->call_date->copy();

        $sessions = $data['sessions'];

        foreach ($sessions as $session) {
            $startDate = $day->copy();
            $startDate->setTimeFromTimeString($session['start']);

            $endDate = $day->copy();
            $endDate->setTimeFromTimeString($session['end']);

            $call->sessions()->create([
                'start_at' => $startDate,
                'end_at'   => $endDate,
            ]);
        }
    }
}
