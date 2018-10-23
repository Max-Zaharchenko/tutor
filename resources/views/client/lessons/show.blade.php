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
                    <iframe src="{{ $lesson->getAttribute('video_url') }}" width="100%" height="280" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    <hr>
                        <lesson-words-component :words="{{ $lesson->words }}"></lesson-words-component>
                    <hr>
                    <p class="lead text-muted">{{ $lesson->description }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    @foreach($lessons as $courseLesson)
                        <a href="{{ route('lessons.show', ['course' => $course->slug, 'lesson' => $courseLesson->slug]) }}"
                           class="card-subtitle mb-2 {{ $lesson->is($courseLesson) ? '' : 'text-muted' }}">{{ $courseLesson->title }}</a>
                        <br/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.plyr.io/3.4.4/plyr.polyfilled.js"></script>
@endsection
