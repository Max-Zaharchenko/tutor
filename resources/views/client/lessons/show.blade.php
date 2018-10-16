@extends('layouts.dashboard')

@section('styles')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.4.4/plyr.css">
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Курсы</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('courses.show', ['course' => $course->slug]) }}">{{ $course->title }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $lesson->title }}</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <video width="100%" height="280" controls controlsList="nodownload" webkitallowfullscreen mozallowfullscreen allowfullscreen poster="PATH-TO-STILL-IMAGE">
                        <source src="{{ $lesson->getAttribute('video_url') }}" type="video/mp4">
                    </video>
                    <hr>
                    <p class="lead text-muted">{{ $lesson->description }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                @foreach($lessons as $courseLesson)
                    <a class="list-group-item {{ $lesson->getKey() === $courseLesson->getKey() ? 'active' : '' }}"
                        href="{{ route('lessons.show', ['course' => $course->slug, 'lesson' => $courseLesson->slug]) }}">
                        {{ $courseLesson->title }}
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.plyr.io/3.4.4/plyr.polyfilled.js"></script>
@endsection
