<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class CallResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->getKey(),
            'call_date' => $this->getAttribute('call_date')->toDateTimeString(),
            'formatted_call_date' => $this->getAttribute('call_date')->toFormattedDateString(),
            'course' => $this->whenLoaded('course', new CourseResource($this->getAttribute('course')))
        ];
    }
}
