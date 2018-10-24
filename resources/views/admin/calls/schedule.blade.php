@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.calls.index') }}">Дзвонки</a></li>
            <li class="breadcrumb-item active" aria-current="page">Добавить день для дзвонка</li>
        </ol>
    </nav>
    <admin-schedule-call-component></admin-schedule-call-component>
@endsection
