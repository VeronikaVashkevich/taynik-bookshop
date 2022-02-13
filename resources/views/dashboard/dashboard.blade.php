@extends('layouts/app')

@section('title', 'Панель управления')

@section('header')
    @parent
@endsection

@section('content')
    @if(session('status'))
        <script>
            alert( {{ session('status') }})
        </script>
    @endif
    <div class="content">
        <section id="adminPanel" class="container">
            <div class="d-flex justify-content-sb w-100p">
                <div class="fs-35 fw-600">Список книг</div>
                <div>
                    <a href="{{ url('dashboard/create-book') }}" class="btn btn-cart-big" style="padding-left: 20px; padding-right: 20px;">Добавить</a>
                </div>
            </div>
            <div class="mt-30"></div>
            <div class="section-content">
                <div class="books">
                    <div class="book">
                        <div class="book-cover">
                            <img src="{{asset('img/covers/и%20эхо%20летит%20по%20горам.png')}}" alt="">
                        </div>
                        <div class="book-title fs-24 fw-600">
                            И эхо летит по горам
                        </div>
                        <div class="book-author fs-22 fw-500">
                            Халед Хоссейни
                        </div>
                        <div class="book-price fs-22 fw-600">
                            22.36р
                        </div>
                        <div class="add-to-cart">
                            <input type="button" value="Редактировать" class="btn btn-cart">
                            <div class="mt-10"></div>
                            <input type="button" value="Удалить" class="btn btn-danger">
                        </div>
                    </div>
                    <div class="book">
                        <div class="book-cover">
                            <img src="{{asset('img/covers/бегущий%20за%20ветром%201.png')}}" alt="">
                        </div>
                        <div class="book-title fs-24 fw-600">
                            Бегущий за ветром
                        </div>
                        <div class="book-author fs-22 fw-500">
                            Халед Хоссейни
                        </div>
                        <div class="book-price fs-22 fw-600">
                            21.90р
                        </div>
                        <div class="add-to-cart">
                            <input type="button" value="Редактировать" class="btn btn-cart">
                            <div class="mt-10"></div>
                            <input type="button" value="Удалить" class="btn btn-danger">
                        </div>
                    </div>
                    <div class="book">
                        <div class="book-cover">
                            <img src="{{asset('img/covers/Бром.png')}}" alt="">
                        </div>
                        <div class="book-title fs-24 fw-600">
                            Похититель детей
                        </div>
                        <div class="book-author fs-22 fw-500">
                            Бром
                        </div>
                        <div class="book-price fs-22 fw-600">
                            25.40р
                        </div>
                        <div class="add-to-cart">
                            <input type="button" value="Редактировать" class="btn btn-cart">
                            <div class="mt-10"></div>
                            <input type="button" value="Удалить" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
