@extends('layouts/app')

@section('title', '403 - В доступе отказано')

@section('header')
    @parent
@endsection

@section('content')
    <div class="content">
        <section id="definition" class="container">
            <div class="error-picture">
                <img src="{{asset('img/errors/403.png')}}" alt="403">
                <div class="copy-r">Designed by stories / Freepik</div>
            </div>
            <div class="error-text">
                <div class="fs-35 fw-600 w-100p">В доступе отказано</div>
                <div class="mt-60">
                    <a href="{{ url('/') }}" class="color-dark-green fs-22 fw-400">На главную</a>
                </div>
            </div>
        </section>
    </div>
@endsection
