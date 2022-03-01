@extends('layouts/app')

@section('title', 'Тайник - Книжный магазин')

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
                    @foreach($recommendedBooks as $book)
                        <div class="book">
                            <div class="book-cover">
                                <img src="{{ $book->image }}" alt="{{ $book->name }}">
                            </div>
                            <div class="book-title">
                                <form action="{{ route('book', $book->id) }}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="bookId" value="{{$book->id}}">
                                    <button type="submit" class="fs-24 fw-600 color-black btn bg-white" style="text-align: left;">{{ $book->name }}</button>
                                </form>
                            </div>
                            <div class="book-author fs-22 fw-500">
                                {{ $book->author }}
                            </div>
                            <div class="book-price fs-22 fw-600">
                                @if($book->price_sale)
                                    {{ $book->price_sale }}р
                                    <span class="book-old-price">{{ $book->price }}р</span>
                                @else {{ $book->price }}р
                                @endif
                            </div>

                            <div class="add-to-cart">
                                <a href="{{ route('addToCart', ['id' => $book->id]) }}">
                                    <input type="button" value="В корзину" class="btn btn-cart">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="newBooks" class="container">
            <div class="section-title">
                Новинки
            </div>
            <div class="section-content">
                <div class="books">
                    @foreach($newestBooks as $book)
                        <div class="book">
                            <div class="book-cover">
                                <img src="{{ $book->image }}" alt="{{ $book->name }}">
                            </div>
                            <div class="book-title fs-24 fw-600">
                                <form action="{{ route('book', $book->id) }}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="bookId" value="{{$book->id}}">
                                    <button type="submit" class="fs-24 fw-600 color-black btn bg-white" style="text-align: left;">{{ $book->name }}</button>
                                </form>
                            </div>
                            <div class="book-author fs-22 fw-500">
                                {{ $book->author }}
                            </div>
                            <div class="book-price fs-22 fw-600">
                                @if($book->price_sale)
                                    {{ $book->price_sale }}р
                                    <span class="book-old-price">{{ $book->price }}р</span>
                                @else {{ $book->price }}р
                                @endif
                            </div>
                            <div class="add-to-cart">
                                <a href="{{ route('addToCart', ['id' => $book->id]) }}">
                                    <input type="button" value="В корзину" class="btn btn-cart">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="soonInStock" class="container">
            <div class="section-title">
                Скоро в продаже
            </div>
            <div class="section-content">
                <div class="books">
                    @foreach($incomingBooks as $book)
                        <div class="book">
                            <div class="book-cover">
                                <img src="{{ $book->image }}" alt="{{ $book->name }}">
                            </div>
                            <div class="book-title fs-24 fw-600">
                                <form action="{{ route('book', $book->id) }}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="bookId" value="{{$book->id}}">
                                    <button type="submit" class="fs-24 fw-600 color-black btn bg-white" style="text-align: left;">{{ $book->name }}</button>
                                </form>
                            </div>
                            <div class="book-author fs-22 fw-500">
                                {{ $book->author }}
                            </div>
                            <div class="book-price fs-22 fw-600">
                                @if($book->price_sale)
                                    {{ $book->price_sale }}р
                                    <span class="book-old-price">{{ $book->price }}р</span>
                                @else {{ $book->price }}р
                                @endif
                            </div>
                            <div class="add-to-cart">
                                <a href="{{ route('addToCart', ['id' => $book->id]) }}">
                                    <input type="button" value="В корзину" class="btn btn-cart">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
