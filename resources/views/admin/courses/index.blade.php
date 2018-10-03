@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Курсы</li>
            <a href="{{ route('admin.courses.create') }}" class="ml-auto">Создать Новый Курс</a>
        </ol>
    </nav>
    <ul class="list-group">
        @foreach($courses as $course)
            <a href="{{ route('admin.courses.show', ['course' => $course]) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $course->title }}</h5>
                    <small><i class="fa fa-play" aria-hidden="true"></i> {{ $course->lessons_count }} уроков</small>
                </div>
                <p class="mb-1">{{ $course->description }}</p>
            </a>
        @endforeach
    </ul>
@endsection
