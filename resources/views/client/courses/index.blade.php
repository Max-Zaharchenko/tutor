@extends('layouts.dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Курсы</li>
        </ol>
    </nav>
    @forelse($courses->chunk(2) as $courses)
        @if($loop->index >= 1)
            <br>
        @endif
        <div class="card-deck">
            @foreach($courses as $course)
                <div class="card no-border">
                    <div class="card-body">
                        <a href="{{ route('courses.show', ['course' => $course->slug]) }}"><img class="card-img-top" src="{{ $course->getAttribute('image_url') }}" alt="Card image cap"></a>
                        <h5 class="card-title mt-2"><a href="{{ route('courses.show', ['course' => $course->slug]) }}">{{ $course->title }}</a></h5>
                        <p class="card-text text-muted">
                            {{ $course->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    @empty
        <p class="lead text-center">Скоро, скоро Зак добавит новые курсы!</p>
    @endforelse
@endsection
