<?php

namespace App\Http\Requests\Admin\Calls;

use Illuminate\Foundation\Http\FormRequest;

class AddSessionsRequest extends FormRequest
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
            'sessions.*.start' => ['required', 'string', 'min:0', 'max:24'],
            'sessions.*.end'   => ['required', 'string', 'min:0', 'max:24'],
        ];
    }
}
