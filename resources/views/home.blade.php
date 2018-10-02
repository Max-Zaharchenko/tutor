@extends('layouts.dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Дом</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <p class="lead">Текущий уровень <span class="badge badge-success float-right">C1</span></p>
                </div>
            </div>
        </div>
    </div>
@endsection
