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
            <div class="d-flex justify-content-sb w-100p">
                <div class="fs-35 fw-600">Список книг</div>
                <div>
                    <a href="{{ url('dashboard/create-book') }}" class="btn btn-cart-big" style="padding-left: 20px; padding-right: 20px;">Добавить</a>
                </div>
            </div>
            <div class="mt-30"></div>
            <div class="section-content">
                <div class="books">
                    @foreach ($books as $book)
                        <div class="book mt-30">
                            <div class="book-cover">
                                <img src="{{asset('img/covers/и%20эхо%20летит%20по%20горам.png')}}" alt="">
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
                                <input type="button" value="Редактировать" class="btn btn-cart">
                                <div class="mt-10"></div>
                                <input type="button" value="Удалить" class="btn btn-danger">
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $books->links() }}
            </div>
        </section>
    </div>
@endsection
