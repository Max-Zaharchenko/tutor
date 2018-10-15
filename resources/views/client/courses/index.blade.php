@extends('layouts.dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Курсы</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            @foreach($courses->chunk(2) as $courses)
                @if($loop->index >= 1)
                <br>
                @endif
                <div class="card-deck">
                    @foreach($courses as $course)
                        <div class="card">
                            <img class="card-img-top" src="{{ $course->getAttribute('image_url') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('courses.show', ['course' => $course->getKey()]) }}">{{ $course->title }}</a></h5>
                                <p class="card-text">
                                    {{ $course->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
