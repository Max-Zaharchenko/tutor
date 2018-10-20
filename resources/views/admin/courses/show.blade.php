@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.courses.index') }}">Курсы</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $course->title }}</li>

            <a href="{{ route('admin.lessons.create', ['course' => $course->slug]) }}" class="ml-auto">Создать Новый Урок</a>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <img src="{{ $course->image_url }}" alt="" style="width: 100%; max-height: 200px;">
            <p class="lead text-muted">{{ $course->description }}</p>
            <ul class="list-group">
                @foreach($lessons as $lesson)
                    <a href="{{ route('admin.lessons.show', ['course' => $course->slug, 'lesson' => $lesson->slug]) }}"
                       class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $lesson->title }}
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
