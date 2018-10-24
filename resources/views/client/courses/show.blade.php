@extends('layouts.dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Курсы</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $course->title }}</li>
        </ol>
    </nav>
    <div class="card no-border">
        <div class="card-body">
            <img src="{{ $course->image_url }}" alt="" style="width: 100%; max-height: 200px;">
            <p class="lead text-muted">{{ $course->description }}</p>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-md-12">
            @foreach($lessons->chunk(3) as $lessonsChunk)
                <div class="card-deck mt-2">
                    @foreach($lessonsChunk as $lesson)
                        @if($lesson->isPublished())
                            <div class="card no-border">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('lessons.show', ['course' => $course->slug, 'lesson' => $lesson->slug]) }}">{{ $lesson->title }}</a>
                                    </h5>
                                    @foreach($lesson->words as $word)
                                        <span class="badge badge-secondary">{{ $word->original }}</span>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="card no-border">
                                <div class="card-body">
                                    <h4 href="{{ route('lessons.show', ['course' => $course->slug, 'lesson' => $lesson->slug]) }}"
                                        class="card-title text-muted">
                                        {{ $lesson->title }}
                                    </h4>
                                    <p class="card-text"><small class="text-muted">Выйдет {{ $lesson->friendly_publish_date }}</small></p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
