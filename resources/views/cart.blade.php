@extends('layouts/app')
    <!doctype html>
@section('title', 'Корзина')

@section('header')
    @parent
@endsection

@section('content')
    <div class="content">
        <section id="cart" class="container">
            <div class="fs-35 fw-600">Корзина</div>
            <div class="cart mt-60">
                <div class="cart-books w-100p">
                    <div class="cart-book">
                        <div class="w-148">
                            <img src="{{asset('img/covers/безумно%20богатые%20азиаты.png')}}" alt="Безумно богатые азиаты" class="w-100p">
                        </div>
                        <div class="pl-30">
                            <div class="fs-22 fw-600">Безумно богатые азиаты</div>
                            <div class="book-price fs-22 fw-600">15.90</div>
                            <div class="fs-18 fw-500">Кевин Кван</div>
                            <a href="#" class="fs-22 fw-500 color-dark-green">Удалить</a>
                            <select name="amount" id="book-amount" class="ml-30">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="cart-book">
                        <div class="w-148">
                            <img src="{{asset('img/covers/бегущий%20за%20ветром%201.png')}}" alt="Безумно богатые азиаты" class="w-100p">
                        </div>
                        <div class="pl-30">
                            <div class="fs-22 fw-600">Бегущий за ветром</div>
                            <div class="book-price fs-22 fw-600">21.90р</div>
                            <div class="fs-18 fw-500">Халед Хоссейни</div>
                            <a href="#" class="fs-22 fw-500 color-dark-green">Удалить</a>
                            <select name="amount" id="book-amount" class="ml-30">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="cart-book">
                        <div class="w-148">
                            <img src="{{asset('img/covers/Бром.png')}}" alt="Безумно богатые азиаты" class="w-100p">
                        </div>
                        <div class="pl-30">
                            <div class="fs-22 fw-600">Похититель детей</div>
                            <div class="book-price fs-22 fw-600">25.40р</div>
                            <div class="fs-18 fw-500">Бром</div>
                            <a href="#" class="fs-22 fw-500 color-dark-green">Удалить</a>
                            <select name="amount" id="book-amount" class="ml-30">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="cart-order d-flex f-wrap">
                    <div class="fs-22 fw-500 w-100p pl-25">Всего: 3 товара</div>
                    <div class="w-100p pl-25">
                        <div class="fs-20 fw-500">Самовывоз: </div>
                        <div class="fs-18 fw-500 color-dark-green">ул.Плеханова 85-124</div>
                    </div>
                    <div class="w-100p pl-25">
                        <div class="fs-20 fw-500">Оплата</div>
                        <div class="fs-18 fw-500 color-dark-green">При получении</div>
                    </div>
                    <div class="w-100p pl-25">
                        <div class="fs-20 fw-600">Итого</div>
                        <div class="fs-22 fw-500 book-price">45.43p</div>
                    </div>
                    <button class="btn btn-order">Оформить заказ</button>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
@parent
@endsection
