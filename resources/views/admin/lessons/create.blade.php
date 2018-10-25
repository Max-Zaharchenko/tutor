@extends('layouts.admin-dashboard')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.courses.index') }}">Курсы</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.courses.show', ['course' => $course->slug]) }}">{{ $course->title }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Создать Новый Урок</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body" style="background-color: #e9ecef;">
            <form method="POST" action="{{ route('admin.lessons.store', ['course' => $course->slug]) }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title" style="color: #555d65;">Название</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description" style="color: #555d65;">Описание</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="published_at" style="color: #555d65;">День публикации</label>
                    <input type="text" name="published_at" id="published_at" value="{{ old('published_at', $defaultPublishedAtDate) }}" class="form-control" aria-describedby="publishedAtHelpBlock">
                    <small id="publishedAtHelpBlock" class="form-text text-muted">
                        Указывается только день публикации. Время открытия урока: <b>12:00</b> по МСК (пока нельзя изменить).
                    </small>
                </div>
                <div class="form-group">
                    <label for="video_url" style="color: #555d65;">Ссылка на видео</label>
                    <input type="text" name="video_url" id="video_url" value="{{ old('video_url', 'https://player.vimeo.com/video/id') }}" class="form-control">
                </div>
                @include('partials.errors')
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-secondary">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#published_at').datetimepicker({
            uiLibrary: 'bootstrap4',
            format: 'hh:mm dd-mm-yyyy',
        });
    </script>
@endsection
