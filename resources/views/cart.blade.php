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
                    @foreach($cart as $book)
                        <div class="cart-book">
                            <div class="w-148">
                                <img src="{{ $book->attributes->image }}" alt="Безумно богатые азиаты" class="w-100p">
                            </div>
                            <div class="pl-30">
                                <div class="fs-22 fw-600">{{ $book->name }}</div>
                                <div class="book-price fs-22 fw-600">{{$book->price}}</div>
                                <div class="fs-18 fw-500">{{ $book->attributes->author }}</div>
                                <a href="{{route('deleteFromCart', ['id' => $book->id ])}}" class="fs-22 fw-500 color-dark-green">Удалить</a>
                                <select name="amount" id="book-amount" class="ml-30 js-book-amount" data-price="{{$book->price}}">
                                    @for($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}"
                                            @if ($i == $book->quantity)
                                                selected
                                            @endif
                                        >
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="cart-order d-flex f-wrap">
                    <div class="fs-22 fw-500 w-100p pl-25">Всего: {{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity()}} товара</div>
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
                        <div class="fs-22 fw-500 book-price js-total-price">{{ $total }}p</div>
                    </div>
                    <button class="btn btn-order">Оформить заказ</button>
                </div>
            </div>
        </section>
    </div>

    <script>
        var totalPrice = 0;

        $(document).ready(function () {
            $('.js-book-amount').each(function () {
                $(this).change(function () {
                    totalPrice = 0;
                    $('.js-book-amount').each(function () {
                        totalPrice += $(this).data('price') * $(this).val();
                    })

                    $('.js-total-price').text(totalPrice.toFixed(2) + 'р')
                })
            })
        })
    </script>
@endsection

@section('footer')
@parent
@endsection
