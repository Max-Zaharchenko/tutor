<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallSession extends Model
{
    protected $guarded = [];

    protected $dates = [
        'start_at', 'end_at',
    ];
}
