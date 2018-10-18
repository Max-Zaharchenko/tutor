@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Присоеденится</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('client.students.join') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $invite->name) }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="messenger" class="col-md-4 col-form-label text-md-right">Желаемый мессенджер</label>

                                <div class="col-md-6">
                                    <select name="messenger" id="messenger" class="form-control{{ $errors->has('messenger') ? ' is-invalid' : '' }}" required>
                                        <option value="telegram">Telegram</option>
                                        <option value="whatsapp">Whats App</option>
                                        <option value="viber">Viber</option>
                                        <option value="other">Другое</option>
                                    </select>

                                    @if ($errors->has('messenger'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('messenger') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile_number" class="col-md-4 col-form-label text-md-right">Номер телефона</label>

                                <div class="col-md-6">
                                    <input id="mobile_number" type="text" class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" value="{{ old('mobile_number', $invite->mobile_number) }}" required>

                                    @if ($errors->has('mobile_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', $invite->email) }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Повтор пароля</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Начать изучение
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
