@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Дзвонки</li>
            <a href="{{ route('admin.calls.create') }}" class="ml-auto">Добавить день для дзвонка</a>
        </ol>
    </nav>
@endsection
