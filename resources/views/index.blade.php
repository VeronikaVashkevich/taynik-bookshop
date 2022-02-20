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
                            <div class="book-title fs-24 fw-600">
                                {{ $book->name }}
                            </div>
                            <div class="book-author fs-22 fw-500">
                                {{ $book->author }}
                            </div>
                            <div class="book-price fs-22 fw-600">
                                {{ $book->price }}р
                            </div>
                            <div class="add-to-cart">
                                <input type="button" value="В корзину" class="btn btn-cart">
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
                                {{ $book->name }}
                            </div>
                            <div class="book-author fs-22 fw-500">
                                {{ $book->author }}
                            </div>
                            <div class="book-price fs-22 fw-600">
                                {{ $book->price }}р
                            </div>
                            <div class="add-to-cart">
                                <input type="button" value="В корзину" class="btn btn-cart">
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
                                {{ $book->name }}
                            </div>
                            <div class="book-author fs-22 fw-500">
                                {{ $book->author }}
                            </div>
                            <div class="book-price fs-22 fw-600">
                                {{ $book->price }}р
                            </div>
                            <div class="add-to-cart">
                                <input type="button" value="В корзину" class="btn btn-cart">
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
