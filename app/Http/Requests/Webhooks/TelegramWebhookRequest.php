<?php

namespace App\Http\Requests\Webhooks;

use Illuminate\Foundation\Http\FormRequest;

class TelegramWebhookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    /**
     * Get the chat ID.
     *
     * @return mixed
     */
    public function getChatId()
    {
        return array_get($this->get('message'), 'chat.id');
    }

    /**
     * Determine whether the sender is subscriving to joins.
     *
     * @return bool
     */
    public function wantsToListenJoins()
    {
        return array_get($this->get('message'), 'text') === '/listenToJoins';
    }

    /**
     * Determine whether the sender is unsubscriving to joins.
     *
     * @return bool
     */
    public function wantsToMuteJoins()
    {
        return array_get($this->get('message'), 'text') == '/muteJoins';
    }
}
