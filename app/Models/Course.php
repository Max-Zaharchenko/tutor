<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    protected $dates = [
        'published_at'
    ];

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function isPublished()
    {
        return $this->getAttribute('published_at') !== null;
    }
}
