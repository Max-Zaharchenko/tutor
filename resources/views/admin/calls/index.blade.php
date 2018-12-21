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
            <div class="collapse mb-3" id="createCall">
                <div class="card card-body">
                    <admin-schedule-call></admin-schedule-call>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Название курса</th>
                                <th>Время дзвонка</th>
                                <th>Соотношение студентов</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($calls as $call)
                                <tr>
                                    <td>{{ $call->course->title }}</td>
                                    <td>{{ $call->call_date->toFormattedDateString() }}</td>
                                    <td><b style="color: green;">13</b> / <b style="color: red;">4</b></td>
                                    <td>
                                        <a href="{{ route('admin.calls.show', ['call' => $call]) }}" class="btn btn-secondary btn-sm">Просмотр</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
