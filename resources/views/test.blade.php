@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Содзвоны</li>
            <a href="javascript:void(0)" class="ml-auto" data-toggle="modal" data-target="#exampleModalCenter">Добавить Сессию</a>
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
                                   @endforeach
                               </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <admin-add-call-session :call-id="5"></admin-add-call-session>
@endsection
