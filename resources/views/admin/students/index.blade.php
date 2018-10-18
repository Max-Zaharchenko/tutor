@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Студенты</li>
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="ml-auto">Пригласить Студента</a>
        </ol>
    </nav>
    <div class="justify-content-center row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('admin.students.store') }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-success">Пригласить</button>
                    </div>
                </div>
                @include('partials.errors')
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Подписка заканчивается</th>
                <th>E-Mail</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->getAttribute('name') }}</td>
                    <td>{{ $student->getAttribute('trial_ends_at') }}</td>
                    <td>{{ $student->getAttribute('email') }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row justify-content-center">
        {!! $students !!}
    </div>
@endsection
