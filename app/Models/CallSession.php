<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallSession extends Model
{
    protected $guarded = [];

    protected $dates = [
        'start_at', 'end_at',
    ];

    public function scopeHaveAppliedStudents($query)
    {
        return $query->whereNotNull('user_id')->whereIn('status', ['PLANNED', 'BOOKED', 'PROCESSING', 'FINISHED']);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
