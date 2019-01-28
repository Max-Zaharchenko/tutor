<?php

namespace App\Listeners\Joins;

use App\Events\Joins\JoinReceived;
use GuzzleHttp\Client;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Redis;

class SendJoinToTelegramChannel implements ShouldQueue
{
    public function handle(JoinReceived $event)
    {
        $chatIDs = Redis::command('SMEMBERS', ['join_listeners']);

        $guzzleClient = new Client();

        foreach ($chatIDs as $chatID) {
            $guzzleClient->post('https://api.telegram.org/bot723982235:AAGj92dbbmISDriufZ868o3UtmzPgwjhmF0/sendMessage', [
                'chat_id' => $chatID,
                'text'    => 'A new subscriber has been added.',
            ]);
        }
    }
}
