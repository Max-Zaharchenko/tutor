@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.courses.index') }}">Курсы</a></li>
            <li class="breadcrumb-item active" aria-current="page">Создать</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body" style="background-color: #e9ecef;">
            <form method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title" style="color: #555d65;">Название</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description" style="color: #555d65;">Описание</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ old('description') }}</textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-secondary">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
