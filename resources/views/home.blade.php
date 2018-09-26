@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item">Дневник</li>
                <li class="list-group-item">Курсы</li>
                <li class="list-group-item">Двзонки</li>
                <li class="list-group-item">Спок</li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Дневник</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
