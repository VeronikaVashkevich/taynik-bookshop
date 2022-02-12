@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <div class="content">
        <section id="myOrders" class="container">
            <div class="fs-35 fw-600">Мои заказы</div>
            <div class="orders mt-30">
                <table class="w-100p">
                    <tr>
                        <td>
                            <div class="order mt-40">
                                <div class="w100-p d-flex justify-content-sb">
                                    <div class="order-number fs-24 fw-600">Номер заказа: 123456</div>
                                    <div class="color-red fs-24 fw-600">Сумма заказа: 25.56</div>
                                </div>
                                <div class="order-date fs-22 fw-500 mt-16">Дата: 12.01.2022</div>
                                <div class="fs-22 "> </div>
                                <ul class="order-list mt-16">
                                    <li class="order-book fs-20 fw-500 mt-10 ml-30">Безумно богатые азиаты</li>
                                    <li class="order-book fs-20 fw-500 mt-10 ml-30">Мор, ученик сметри</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="order mt-40">
                                <div class="w100-p d-flex justify-content-sb">
                                    <div class="order-number fs-24 fw-600">Номер заказа: 654321</div>
                                    <div class="color-red fs-24 fw-600">Сумма заказа: 43.80</div>
                                </div>
                                <div class="order-date fs-22 fw-500 mt-16">Дата: 15.12.2021</div>
                                <div class="fs-22 "> </div>
                                <ul class="order-list mt-16">
                                    <li class="order-book fs-20 fw-500 mt-10 ml-30">Бегущий за ветром</li>
                                    <li class="order-book fs-20 fw-500 mt-10 ml-30">Похититель детей</li>
                                    <li class="order-book fs-20 fw-500 mt-10 ml-30">И эхо летит по горам</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
    </div>
@endsection
