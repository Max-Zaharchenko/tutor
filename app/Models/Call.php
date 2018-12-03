<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    public $table = 'calls';

    protected $guarded = [];

    protected $dates = [
        'call_date',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
