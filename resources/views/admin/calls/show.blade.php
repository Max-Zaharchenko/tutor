@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.calls.index') }}">Содзвоны</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $call->course->title }}</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-body">
                    <admin-call-show :call-id="{{ $call->getKey() }}"></admin-call-show>
                </div>
            </div>
        </div>
    </div>
@endsection
