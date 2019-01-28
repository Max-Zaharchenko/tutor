<?php

namespace App\Events\Joins;

use App\Models\Join;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class JoinReceived
{
    use Dispatchable, SerializesModels;

    /**
     * @var Join
     */
    public $join;

    /**
     * Create a new event instance.
     *
     * @param Join $join
     */
    public function __construct(Join $join)
    {
        $this->join = $join;
    }
}
