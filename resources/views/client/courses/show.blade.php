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
                    @if($lesson->isPublished())
                        <a href="{{ route('lessons.show', ['course' => $course->slug, 'lesson' => $lesson->slug]) }}"
                           class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $lesson->title }}
                            <span>
                                @foreach($lesson->words as $word)
                                    <span class="badge badge-secondary">{{ $word->original }}</span>
                                @endforeach
                            </span>
                        </a>
                    @else
                        <button href="{{ route('lessons.show', ['course' => $course->slug, 'lesson' => $lesson->slug]) }}"
                           class="list-group-item d-flex justify-content-between align-items-center disabled" disabled="disabled">
                            {{ $lesson->title }}
                            <span class="text-muted">Выйдет <b>{{ $lesson->friendly_publish_date }}</b></span>
                        </button>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endsection
