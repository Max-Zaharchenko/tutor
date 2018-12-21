<?php

namespace App\Rules\Calls;

use App\Models\Call;
use App\Models\CallSession;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class VacantSessionTimeRule implements Rule
{
    /**
     * @var Call
     */
    protected $call;

    /**
     * Create a new rule instance.
     *
     * @param Call $call
     */
    public function __construct(Call $call)
    {
        $this->call = $call;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $day = $this->call->call_date->copy();

        $start = $day->copy()->setTimeFromTimeString(array_get($value, 'start'));
        $end = $day->copy()->setTimeFromTimeString(array_get($value, 'end'));

        return CallSession::query()
                ->where('call_id', $this->call->getKey())
                ->where(function ($query) use ($start, $end) {
                    $query->where('start_at', '<=', $start)
                        ->where('end_at', '>=', $end)
                        ->orWhere('start_at', '>=', $start)
                        ->where('start_at', '<=', $end)
                        ->orWhere('end_at', '<=', $end)
                        ->where('end_at', '>=', $start)
                        ->orWhere('start_at', '>=', $start)
                        ->where('end_at', '<=', $end);
                })
                ->doesntExist();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
