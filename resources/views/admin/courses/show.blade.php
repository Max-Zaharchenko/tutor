@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.courses.index') }}">Курсы</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $course->title }}</li>

            <li class="ml-auto">
                @if($course->isPublished())
                    <span class="badge badge-success">Курс активен</span> <a href="{{ route('admin.courses.deactivate', ['courseSlug' => $course->slug]) }}" onclick="return confirm('Скрыть курс?')">Скрыть</a>
                @else
                    <span class="badge badge-danger">Курс скрыт</span> <a href="{{ route('admin.courses.activate', ['courseSlug' => $course->slug]) }}" onclick="return confirm('Активировать курс?')">Активировать</a>
                @endif
            </li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <img src="{{ $course->image_url }}" alt="" style="width: 100%; max-height: 200px;">
            <p class="lead text-muted">{{ $course->description }}</p>
            <div class="form-group">
                <a href="{{ route('admin.lessons.create', ['course' => $course->slug]) }}" class="btn btn-block btn-success">Добавить урок</a>
            </div>
            <ul class="list-group">
                @foreach($lessons as $lesson)
                    <a href="{{ route('admin.lessons.show', ['course' => $course->slug, 'lesson' => $lesson->slug]) }}"
                       class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $lesson->title }}
                        @if($lesson->isPublished())
                            <span class="badge badge-success">Урок активный</span>
                        @else
                            <span class="text-muted">Выйдет ({{ $lesson->published_at->timezone('Europe/Moscow')->diffForHumans() }} в {{ $lesson->published_at->timezone('Europe/Moscow')->format('H:i') }})</span>
                        @endif
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
