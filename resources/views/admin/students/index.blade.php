@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Студенты</li>
        </ol>
    </nav>
    <div class="justify-content-center row">
        @if(session()->has('success'))
        <div class="col-md-12">
            <div class="alert alert-success">{{ session('success') }}</div>
        </div>
        @endif
        <div class="col-md-12">
            <form method="POST" action="{{ route('admin.invites.store') }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-sm-3">
                        <input type="text" name="name" class="form-control" id="email" placeholder="Имя">
                    </div>
                    <div class="col-sm-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="mobile_number" class="form-control" id="email" placeholder="Телефон">
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-success btn-block">Пригласить</button>
                    </div>
                </div>
                @include('partials.errors')
            </form>
        </div>
    </div>
    <div class="card">
       <div class="card-body">
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
       </div>
   </div>
@endsection
