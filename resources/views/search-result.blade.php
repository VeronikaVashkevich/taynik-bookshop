@extends('layouts/app')

@section('title', 'Результат поиска')
@section('header')
    @parent
@endsection

@section('content')
    <div class="content">
        @if (count($books) != 0)
            <section id="catalog" class="container">
                <div class="books">
                    @foreach($books as $book)
                        <div class="book-small mt-30">
                            <div class="book-cover">
                                <img src="{{ $book->image }}" alt="">
                            </div>
                            <div class="book-title fs-21 fw-600">
                                <form action="{{ route('book', $book->id) }}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="bookId" value="{{$book->id}}">
                                    <button type="submit" class="fs-24 fw-600 color-black btn bg-white"
                                            style="text-align: left;">{{ $book->name }}</button>
                                </form>
                            </div>
                            <div class="book-author fs-19 fw-500">
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
                                @if ($book->amount > 0)
                                    <a href="{{ route('addToCart', ['id' => $book->id]) }}">
                                        <input type="button" value="В корзину" class="btn btn-cart">
                                    </a>
                                @else
                                    <a>
                                        <input type="button" value="Скоро в продаже" class="btn btn-cart" disabled>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-links">
                    {{ $books->links() }}
                </div>
            </section>
        @else
            <div style="height: 40vh; display: flex; align-items: center; justify-content: center; flex-direction: column">
                <div>
                    <h1 class="w-100p">Извините, у нас нет таких книг, но есть много других, не менее интересных</h1>
                </div>
                <div class="mt-70">
                    <a href="{{ url('/') }}" class="fs-35 fw-600 color-dark-green w-100p">На главную</a>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('footer')
    @parent
@endsection
