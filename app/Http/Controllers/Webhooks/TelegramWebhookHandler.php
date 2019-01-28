<?php

namespace App\Http\Controllers\Webhooks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Webhooks\TelegramWebhookRequest;
use Illuminate\Support\Facades\Redis;

class TelegramWebhookHandler extends Controller
{
    /**
     * Proceed the telegram webhook.
     * @param TelegramWebhookRequest $request
     */
    public function __invoke(TelegramWebhookRequest $request)
    {
        if ($request->wantsToListenJoins()) {
            Redis::command('SADD', ['join_listeners', $request->getChatId()]);
        }

        if ($request->wantsToLeaveJoins()) {
            Redis::command('SREM', ['join_listeners', $request->getChatId()]);
        }
    }
}
