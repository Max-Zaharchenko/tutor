@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Vocabulary</li>
            <a class="ml-auto" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Добавить новое слово</a>
        </ol>
    </nav>

    <div class="justify-content-center row">
        <div class="col-md-12">
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <admin-vocabulary-create-word></admin-vocabulary-create-word>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <admin-vocabulary-words></admin-vocabulary-words>
        </div>
    </div>
@endsection
