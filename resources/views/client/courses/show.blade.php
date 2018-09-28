@extends('layouts.dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Курсы</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $course->title }}</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <img src="{{ $course->image_url }}" alt="" style="width: 100%; max-height: 200px;">
                <p class="lead text-muted">{{ $course->description }}</p>
            <ul class="list-group">
                @foreach($lessons as $lesson)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('lessons.show', ['course' => $course, 'lesson' => $lesson]) }}">{{ $lesson->title }}</a>
                        <span class="badge badge-primary badge-pill">14</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
