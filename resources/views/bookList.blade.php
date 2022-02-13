@extends('layouts/app')

@section('title', 'Каталог книг')

@section('header')
    @parent
@endsection

@section('content')
    <div class="content">
        <section id="filters" class="container">
            <div class="section-subtitle">
                Фильтр
            </div>
            <div class="section-content">
                <table class="filters mt-16">
                    <tr class="filter-titles">
                        <th class="fs-18 fw-500 filter-title"></th>
                        <th class="fs-18 fw-500 filter-title">Обложка</th>
                        <th class="fs-18 fw-500 filter-title">Год издания</th>
                        <th class="fs-18 fw-500 filter-title">Наличие</th>
                    </tr>
                    <tr class="filter-body">
                        <td class="filter-group">
                            <ul>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="language" id="foreign"> Зарубежная литература
                                </li>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="language" id="russian"> Русская литература
                                </li>
                            </ul>
                        </td>
                        <td class="filter-group">
                            <ul>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="cover" value="hardCover"> Твердый переплет
                                </li>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="cover" value="softCover"> Мягкий переплет
                                </li>
                            </ul>
                        </td>
                        <td class="filter-group">
                            <ul>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="year" value="2021"> 2021
                                </li>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="year" value="2020"> 2020
                                </li>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="year" value="2019"> 2019
                                </li>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="year" value="2018"> 2018
                                </li>
                            </ul>
                        </td>
                        <td class="filter-group">
                            <ul>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="inStock" value="inStock"> На складе
                                </li>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="inStock" value="order"> Под заказ
                                </li>
                                <li class="filter-parameter fw-500 mt-16">
                                    <input type="checkbox" name="inStock" value="outOfStock"> Нет в продаже
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <div class="sorting">

                </div>
            </div>
        </section>

        <section id="catalog" class="container">
            <div class="books">
                @foreach($books as $book)
                    <div class="book-small mt-30">
                        <div class="book-cover">
                            <img src="{{asset('img/covers/любовь-ненависть.png')}}" alt="">
                        </div>
                        <div class="book-title fs-21 fw-600">
                            {{ $book->name }}
                        </div>
                        <div class="book-author fs-19 fw-500">
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
            {{ $books->links() }}
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
