@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Курсы</li>
            <a href="{{ route('admin.courses.create') }}" class="ml-auto">Создать Новый Курс</a>
        </ol>
    </nav>
    <ul class="list-group">
        @foreach($courses->chunk(2) as $courses)
            @if($loop->index >= 1)
                <br>
            @endif
            <div class="card-deck">
                @foreach($courses as $course)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('admin.courses.show', ['courseSlug' => $course->slug]) }}">{{ $course->title }}</a>
                                @if($course->isPublished())
                                    <span class="badge badge-success float-right">Активный</span>
                                @else
                                    <span class="badge badge-secondary float-right">Пауза</span>
                                @endif
                            </h5>
                            <hr>
                            <p class="card-text">
                                @foreach($course->lessons as $lesson)
                                    <small>
                                        <b>{{ $loop->index + 1 }}.</b>
                                        <b>{{ $lesson->title }}</b>
                                        @if(! $lesson->isPublished() && $lesson->published_at)
                                            <small>Опубликируется: {{ $lesson->published_at->format('jS \o\f F, g:i:s a') }}</small>
                                        @endif
                                    </small><br>
                                @endforeach
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </ul>
@endsection
