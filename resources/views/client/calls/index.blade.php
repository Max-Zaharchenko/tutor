@extends('layouts.dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Практика</li>
        </ol>
    </nav>
    @forelse($calls as $call)
        <div class="card shadow-border mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('courses.show', ['course' => $call->course->slug]) }}" style="color: black;" target="_blank">{{ $call->course->title }}</a>
                </h5>
                <p class="card-text text-muted">Выберите удобное время для дзвонка.</p>
                <a href="#" class="btn btn-outline-secondary">Выбрать время</a>
            </div>
        </div>
    @empty
    @endforelse
@endsection
