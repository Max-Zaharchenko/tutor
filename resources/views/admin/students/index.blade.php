@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Студенты</li>
        </ol>
    </nav>
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
