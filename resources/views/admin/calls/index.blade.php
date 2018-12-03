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
                    <admin-calls-index></admin-calls-index>
                </div>
            </div>
        </div>
    </div>
@endsection
