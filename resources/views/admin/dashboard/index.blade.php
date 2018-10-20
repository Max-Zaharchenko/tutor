@extends('layouts.admin-dashboard')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="fas fa-3x fa-graduation-cap"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Количество студентов</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">{{ $studentsCount }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="fas fa-3x fa-book"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Новый урок</p>
                            <div class="fluid-container">
                                {{--<h3 class="font-weight-medium text-right mb-0">65,650</h3>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="fas fa-3x fa-graduation-cap"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Ближайший дзвонок</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0"><a href="#">Паша</a> <b>13:20</b></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
