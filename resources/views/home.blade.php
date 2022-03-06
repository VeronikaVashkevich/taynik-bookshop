@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <div class="content">
        <section id="myOrders" class="container">
            <div class="fs-35 fw-600">Мои заказы</div>
            <div class="orders mt-30">
                @if (count($orders) != 0)
                    <table class="w-100p">
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    <div class="order mt-40">
                                        <div class="w100-p d-flex justify-content-sb">
                                            <div class="order-number fs-24 fw-600">Номер заказа: {{ $order->number }}</div>
                                            <div class="color-red fs-24 fw-600">Сумма заказа: {{ $order->totalSum }}</div>
                                        </div>
                                        <div class="order-date fs-22 fw-500 mt-16">Дата: {{ date('d.m.Y H:i', strtotime($order->created_at)) }}</div>
                                        <div class="fs-22 "> </div>
                                        <ul class="order-list mt-16">
                                            @foreach($order->books as $book)
                                                <li class="order-book fs-20 fw-500 mt-10 ml-30">{{ $book->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <div style="height: 40vh; display: flex; align-items: flex-start; justify-content: center; flex-direction: column">
                        <div>
                            <h1 class="w-100p fw-600 fs-35">У вас пока нет заказов. Самое время что-то купить!</h1>
                        </div>
                        <div class="mt-70">
                            <a href="{{ url('/') }}" class="fs-26 fw-600 color-dark-green w-100p">На главную</a>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </div>
@endsection
