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

    public function scopeBySlug($query, $value)
    {
        return $query->where('slug', $value);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function isPublished()
    {
        return $this->getAttribute('published_at') !== null;
    }

    public function activate()
    {
        $this->published_at = now();
        $this->save();
    }

    public function deactivate()
    {
        $this->published_at = null;
        $this->save();
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
