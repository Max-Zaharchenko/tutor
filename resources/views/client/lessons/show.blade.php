@extends('layouts.dashboard')

@section('styles')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.4.4/plyr.css">
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Курсы</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('courses.show', ['course' => $course]) }}">{{ $course->title }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $lesson->title }}</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <iframe src="https://player.vimeo.com/video/76979871" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <hr>
            <p class="lead text-muted">{{ $course->description }}</p>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.plyr.io/3.4.4/plyr.polyfilled.js"></script>
@endsection
