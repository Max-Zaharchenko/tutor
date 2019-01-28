<?php

namespace App\Http\Controllers\Webhooks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Webhooks\TelegramWebhookRequest;

class TelegramWebhookHandler extends Controller
{
    /**
     * Proceed the telegram webhook.
     * @param TelegramWebhookRequest $request
     */
    public function __invoke(TelegramWebhookRequest $request)
    {
        logger($request->all());
    }
}
