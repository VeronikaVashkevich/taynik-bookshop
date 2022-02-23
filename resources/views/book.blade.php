@extends('layouts/app')

@section('title', 'Книга')

@section('header')
    @parent
@endsection

@section('content')
    <div class="content">
        <section id="book" class="container">
            <div class="book-description">
                <div class="cover">
                    <img src="{{ $book->image }}" alt="обложка">
                </div>
                <div class="pl-80 d-flex f-wrap">
                    <div class="justify-content-sb w-100p d-flex">
                        <div class="fs-35 fw-600 ">{{ $book->name }}</div>
                        <div class="fs-24 fw-500 vendor-code">Арт.{{ $book->vendor_code }}</div>
                    </div>
                    <div class="fs-27 fw-500 mt-16">{{ $book->author }}, 2019</div>
                    <div class="book-price fs-35 w-100p fw-600">{{ $book->price }}</div>
                    <div class="w-100p">
                        <div class="fs-24 fw-500 align-self-end">Товар на складе</div>
                        <div class="fs-24 fw-500 stock align-self-end">Наличие в магазинах</div>
                    </div>
                    <button class="btn btn-cart-big">Положить в корзину</button>
                </div>
            </div>
            <div class="mt-75">
                <div class="fs-30 fw-600">Описание</div>
                <div class="mt-25 fs-22 fw-500 lh-30">
                    {{ $book->description }}
                </div>
            </div>
            <div class="mt-70">
                <div class="fs-30 fw-600">Характеристики</div>
            </div>
            <div class="mt-30">
                <table class="specifications">
                    <tr class="spec">
                        <td class="spec-key">Переплет</td>
                        <td class="spec-value">{{ $book->cover }}</td>
                    </tr>
                    <tr class="spec">
                        <td class="spec-key">Возраст</td>
                        <td class="spec-value">{{ $book->age }}+</td>
                    </tr>
                    <tr class="spec">
                        <td class="spec-key">Страниц</td>
                        <td class="spec-value">{{ $book->pages }}</td>
                    </tr>
                    <tr class="spec">
                        <td class="spec-key">Формат</td>
                        <td class="spec-value">{{ $book->width }}х{{ $book->length }} мм</td>
                    </tr>
                    <tr class="spec">
                        <td class="spec-key">Год издания</td>
                        <td class="spec-value">2019</td>
                    </tr>
                </table>
            </div>

            <div class="mt-80 mb-60">
                <div class="d-flex w-100p justify-content-sb v-align-bottom">
                    <div class="fs-30 fw-600">Отзывы</div>
                    <a class="fs-24 fw-500 color-dark-green" href="#">Оставить отзыв</a>
                </div>
                @foreach($reviews as $review)
                    <div class="review">
                        <div class="fs-22 fw-600">{{ $review->user->name }}</div>
                        <div class="mt-16 fs-22 fw-500">
                            {{$review->text}}
                        </div>
                    </div>
                @endforeach
            </div>

            @if (Auth::check())
            <div class="review-form mt-40">
                <div class="fs-24 color-dark-green fw-600 mb-25">Оставить отзыв</div>
                <form action="{{ route('reviews.store') }}" method="post">
                    @csrf
                    <textarea name="text" id="text" cols="30" rows="10" class="form-control"></textarea>
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <button type="submit" class="btn btn-cart">Отправить</button>
                </form>
            </div>
            @endif

        </section>

        <section id="similar" class="container">
            <div class="d-flex justify-content-start">
                <div class="book-small pr-90">
                    <div class="book-cover">
                        <img src="{{asset('img/covers/крылья.png')}}" alt="">
                    </div>
                    <div class="book-title fs-21 fw-600">
                        Крылья
                    </div>
                    <div class="book-author fs-19 fw-500">
                        Кристина Старк
                    </div>
                    <div class="book-price fs-22 fw-600">
                        17.35р
                    </div>
                </div>
                <div class="book-small pr-90">
                    <div class="book-cover">
                        <img src="{{asset('img/covers/зулейха%20открыывает%20глаза.png')}}" alt="">
                    </div>
                    <div class="book-title fs-21 fw-600">
                        Зулейха открывает глаза
                    </div>
                    <div class="book-author fs-19 fw-500">
                        Гузель Яхина
                    </div>
                    <div class="book-price fs-22 fw-600">
                        14.50р
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
