@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="">
        <div class="justify-content-center">
            <div class="card">
                <div class="card-header fs-35 fw-600 mb-40">Регистрация</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="form">
                        @csrf
                        {{-- <div class="">
                            <div class="col-md-6"> --}}
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Логин">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- </div> --}}
                        {{-- </div> --}}

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="Пароль">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Повторите пароль">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-auth">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>

                        <div class="mt-30">
                            <div class="fs-22 fw-500">Есть аккаунт?
                                <a class="color-dark-green" href="{{ url('/login') }}">Войти</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
