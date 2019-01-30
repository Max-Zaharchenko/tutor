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
        $join = $event->join;

        $chatIDs = Redis::command('SMEMBERS', ['join_listeners']);
        $guzzleClient = new Client();

        foreach ($chatIDs as $chatID) {
            $guzzleClient->post('https://api.telegram.org/bot723982235:AAGj92dbbmISDriufZ868o3UtmzPgwjhmF0/sendMessage', [
                'form_params' => [
                    'chat_id' => $chatID,
                    'text'    => sprintf("A new user signed up: \nName: %s \nEmail: %s Phone Number: \nMessenger: %s", $join->name, $join->email, $join->phone_number, $join->messenger),
                ]
            ]);
        }
    }
}
