@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Содзвоны</li>
            <a class="ml-auto" data-toggle="collapse" href="#createCall" role="button" aria-expanded="false" aria-controls="createCall">Создать содзвон</a>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        @foreach($hours as $hour => $calls)
                            <div class="col-md-2 text-center">
                            <b>{{ $hour }}</b>
                               <div class="form-group">
                                   @foreach($calls as $call)
                                       <button class="btn btn-sm {{ $call['status'] }} mt-2">{{ $call['start'] }} - {{ $call['end'] }}</button>
                                       {{--                                    <a href="#" class="badge badge-{{ $call['status'] == 'reserved' ? 'primary' : 'success' }}">{{ $call['start'] }} - {{ $call['end'] }}</a>--}}
                                   @endforeach
                               </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary">HH:MM - HH:MM</button> - Выполнен дзвонок
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-secondary">HH:MM - HH:MM</button> - Студент не ответил
                        </div>
                        <div class="col-md-6 mt-2">
                            <button class="btn btn-outline-success">HH:MM - HH:MM</button> - Свободное место
                        </div>
                        <div class="col-md-6 mt-2">
                            <button class="btn btn-success">HH:MM - HH:MM</button> - Зарезервированое место
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
