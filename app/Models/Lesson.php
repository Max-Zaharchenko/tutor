<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];

    protected $dates = [
        'published_at'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function words()
    {
        return $this->belongsToMany(Word::class, 'lesson_words');
    }

    public function isPublished()
    {
        return $this->getAttribute('published_at') !== null && $this->getAttribute('published_at') < now();
    }

    public function scopeByCourseId($query, $value)
    {
        return $query->where('course_id', $value);
    }

    public function scopeBySlug($query, $value)
    {
        return $query->where('slug', $value);
    }

    public function getFriendlyPublishDateAttribute()
    {
        $date = $this->published_at->timezone('Europe/Moscow');

        return sprintf('%s в %s', $date->format('d.m'), $date->format('H:i'));
    }
}
