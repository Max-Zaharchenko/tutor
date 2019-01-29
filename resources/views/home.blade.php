@extends('layouts.dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Дом</li>
        </ol>
    </nav>
    <div class="card shadow-border">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <blockquote class="blockquote text-center">
                        <h2>London is the capital of Great Britain</h2>
                        <p class="lead text-muted">Страница в разработке</p>
                    </blockquote>
                </div>
                {{--<div class="col-md-5">--}}
                    {{--@forelse($calls as $call)--}}
                        {{--<div class="card shadow-border mb-3">--}}
                            {{--<div class="card-body">--}}
                                {{--<h5 class="card-title">--}}
                                    {{--<a href="{{ route('courses.show', ['course' => $call->course->slug]) }}" style="color: black;" target="_blank">--}}
                                        {{--{{ $call->course->title }}--}}
                                        {{--<small class="text-muted">{{ $call->call_date->toFormattedDateString() }}</small>--}}
                                    {{--</a>--}}
                                {{--</h5>--}}
                                {{--<p class="card-text text-muted">Выберите удобное время для дзвонка.</p>--}}
                                {{--<div class="form-group">--}}
                                    {{--<select name="" id="" class="form-control">--}}
                                        {{--<option value="">13:30 - 13:35</option>--}}
                                        {{--<option value="">13:36 - 13:41</option>--}}
                                        {{--<option value="">13:42 - 13:47</option>--}}
                                    {{--</select>--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">Выбрать время</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@empty--}}
                    {{--@endforelse--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection
