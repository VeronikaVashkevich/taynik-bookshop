@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header fs-35 fw-600 mb-40">Вход</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

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
                                    autocomplete="current-password" placeholder="Пароль">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-25">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="fs-22 fw-500" for="remember">
                                        Запомнить меня
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-auth">
                                    Войти
                                </button>
                            </div>
                        </div>

                                {{--<div class="mt-30">
                                    @if (Route::has('password.request'))
                                        <a class="fs-22 fw-500 color-dark-green"
                                            href="{{ route('password.request') }}">
                                            Забыли пароль?
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div> --}}

                        <div class="mt-30">
                            <div class="fs-22 fw-500">Нет аккаунта?
                                <a class="color-dark-green" href="{{ url('/register') }}">Регистрация</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
