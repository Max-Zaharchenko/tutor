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
                                    <span class="badge badge-secondary float-right">Off</span>
                                @endif
                            </h5>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </ul>
@endsection
