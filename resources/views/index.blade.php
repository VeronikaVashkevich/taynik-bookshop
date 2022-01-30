@extends('layouts')
    <!doctype html>
<html lang="en">

@section('title', 'Тайник - Книжный магазин')

<body>
@section('header')
    @parent
@endsection

@section('content')
    <div class="content">
        <section id="recommendations" class="container">
            <div class="section-title">
                Рекомендуемые книги
            </div>
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
                            <input type="button" value="В корзину" class="btn btn-cart">
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
                            <input type="button" value="В корзину" class="btn btn-cart">
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
                            <input type="button" value="В корзину" class="btn btn-cart">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="newBooks" class="container">
            <div class="section-title">
                Новинки
            </div>
            <div class="section-content">
                <div class="books">
                    <div class="book">
                        <div class="book-cover">
                            <img src="{{'img/covers/ритм%20наших%20сердец.png'}}" alt="">
                        </div>
                        <div class="book-title fs-24 fw-600">
                            Ритм наших сердец
                        </div>
                        <div class="book-author fs-22 fw-500">
                            Стелла так
                        </div>
                        <div class="book-price fs-22 fw-600">
                            15.00р
                        </div>
                        <div class="add-to-cart">
                            <input type="button" value="В корзину" class="btn btn-cart">
                        </div>
                    </div>
                    <div class="book">
                        <div class="book-cover">
                            <img src="{{asset('img/covers/смерть%20в%20беседке.png')}}" alt="">
                        </div>
                        <div class="book-title fs-24 fw-600">
                            Смерть в беседке
                        </div>
                        <div class="book-author fs-22 fw-500">
                            Каролайн Дарфорд
                        </div>
                        <div class="book-price fs-22 fw-600">
                            16.35р
                        </div>
                        <div class="add-to-cart">
                            <input type="button" value="В корзину" class="btn btn-cart">
                        </div>
                    </div>
                    <div class="book">
                        <div class="book-cover">
                            <img src="{{asset('img/covers/красивые%20вещи.png')}}" alt="">
                        </div>
                        <div class="book-title fs-24 fw-600">
                            Красивые вещи
                        </div>
                        <div class="book-author fs-22 fw-500">
                            Джанель Браун
                        </div>
                        <div class="book-price fs-22 fw-600">
                            14.90р
                        </div>
                        <div class="add-to-cart">
                            <input type="button" value="В корзину" class="btn btn-cart">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="soonInStock" class="container">
            <div class="section-title">
                Скоро в продаже
            </div>
            <div class="section-content">
                <div class="books">
                    <div class="book">
                        <div class="book-cover">
                            <img src="{{asset('img/covers/доверься%20мне.png')}}" alt="">
                        </div>
                        <div class="book-title fs-24 fw-600">
                            Доветься мне
                        </div>
                        <div class="book-author fs-22 fw-500">
                            Мона Кастен
                        </div>
                        <div class="book-price fs-22 fw-600">
                            19.20р
                        </div>
                        <div class="add-to-cart">
                            <input type="button" value="В корзину" class="btn btn-cart">
                        </div>
                    </div>
                    <div class="book">
                        <div class="book-cover">
                            <img src="{{asset('img/covers/лето.png')}}" alt="">
                        </div>
                        <div class="book-title fs-24 fw-600">
                            Лето
                        </div>
                        <div class="book-author fs-22 fw-500">
                            Али Смит
                        </div>
                        <div class="book-price fs-22 fw-600">
                            17.45р
                        </div>
                        <div class="add-to-cart">
                            <input type="button" value="В корзину" class="btn btn-cart">
                        </div>
                    </div>
                    <div class="book">
                        <div class="book-cover">
                            <img src="{{asset('img/covers/адель.png')}}" alt="">
                        </div>
                        <div class="book-title fs-24 fw-600">
                            Адель
                        </div>
                        <div class="book-author fs-22 fw-500">
                            Лейла Слимани
                        </div>
                        <div class="book-price fs-22 fw-600">
                            17.70р
                        </div>
                        <div class="add-to-cart">
                            <input type="button" value="В корзину" class="btn btn-cart">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
</body>
</html>
