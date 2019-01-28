<?php

namespace App\Listeners\Joins;

use App\Events\Joins\JoinReceived;
use GuzzleHttp\Client;

class SendJoinToTelegramChannel
{
    public function handle(JoinReceived $event)
    {
        $guzzleClient = new Client();
    }
}
