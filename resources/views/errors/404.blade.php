@extends('layouts/app')

@section('title', '404 - Страница не найдена')

@section('header')
    @parent
@endsection

@section('content')
    <div class="content">
        <section id="definition" class="container">
            <div class="error-picture">
                <img src="{{asset('img/errors/404.png')}}" alt="404">
                <div class="copy-r">Designed by stories / Freepik</div>
            </div>
            <div class="error-text">
                <div class="fs-35 fw-600 w-100p">Страницы не существует</div>
                <div class="mt-60">
                    <a href="{{ url('/') }}" class="color-dark-green fs-22 fw-400">На главную</a>
                </div>
            </div>
        </section>
    </div>
@endsection
