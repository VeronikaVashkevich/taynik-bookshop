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
{{--            <div class="d-flex justify-content-sb w-100p">--}}
{{--                <div class="fs-35 fw-600">Категории</div>--}}
{{--                <div>--}}
{{--                    <a href="{{ url('dashboard/categories') }}" class="btn btn-cart-big"--}}
{{--                       style="padding-left: 20px; padding-right: 20px;">Перейти к управлению</a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="d-flex justify-content-sb w-100p mt-70">
                <div class="fs-35 fw-600">Отзывы</div>
                <div>
                    <a href="{{ url('dashboard/reviews') }}" class="btn btn-cart-big"
                       style="padding-left: 20px; padding-right: 20px;">Перейти к управлению</a>
                </div>
            </div>
            <div class="mt-70"></div>
            <div class="d-flex justify-content-sb w-100p">
                <div class="fs-35 fw-600">Список книг</div>
                <div>
                    <a href="{{ url('dashboard/create-book') }}" class="btn btn-cart-big"
                       style="padding-left: 20px; padding-right: 20px;">Добавить</a>
                </div>
            </div>
            <div class="mt-30"></div>
            <div class="section-content">
                <div class="books">
                    @foreach ($books as $book)
                        <div class="book mt-30">
                            <div class="book-cover">
                                <img src="{{ $book->image }}" alt="">
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
                                <a href="{{ route('books.edit', $book->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-cart">
                                </a>
                                <div class="mt-10"></div>
                                <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Удалить" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pagination-links">
                {{ $books->links() }}
            </div>
        </section>
    </div>
@endsection
