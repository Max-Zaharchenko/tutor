@extends('layouts.dashboard')

@section('styles')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.4.4/plyr.css">
    <style>
        .lessonDisabled {
            color: currentColor;
            opacity: 0.5;
            text-decoration: none;
            cursor: not-allowed;
        }
    </style>
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
            <div class="card shadow-border">
                <div class="card-body">
                    <iframe src="{{ $lesson->getAttribute('video_url') }}" width="100%" height="280" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    <lesson-words-component :words="{{ $lesson->words }}"></lesson-words-component>
                    <p class="lesson-description text-muted mt-2">{{ $lesson->description }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-border">
                <div class="card-body">
                    @foreach($lessons as $courseLesson)
                        @if($courseLesson->isPublished())
                            <a href="{{ route('lessons.show', ['course' => $course->slug, 'lesson' => $courseLesson->slug]) }}"
                               class="card-subtitle mb-2 {{ $lesson->is($courseLesson) ? '' : 'text-muted' }}">{{ $courseLesson->title }}</a>
                            <br/>
                        @else
                            <a href="#" class="card-subtitle mb-2 lessonDisabled text-muted" onclick="return false;">
                                {{ $courseLesson->title }} <b style="color: black; !important;">Выйдет {{ $courseLesson->friendly_publish_date }}</b>
                            </a>
                            <br/>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.plyr.io/3.4.4/plyr.polyfilled.js"></script>
@endsection
