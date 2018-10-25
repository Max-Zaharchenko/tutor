<?php

namespace App\Http\Requests\Admin\Courses;

use Illuminate\Foundation\Http\FormRequest;

class CreateLessonRequest extends FormRequest
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
            'title'         => ['required', 'min:3', 'string', 'unique:courses,title'],
            'description'   => ['required', 'string'],
            'video_url'     => ['required', 'url', 'unique:lessons,video_url'],
            'published_at'  => ['required', 'date', 'date_format:H:i d-m-Y'],
        ];
    }
}
