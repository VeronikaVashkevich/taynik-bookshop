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
                <div class="book-small">
                    <div class="book-cover">
                        <img src="{{asset('img/covers/любовь-ненависть.png')}}" alt="">
                    </div>
                    <div class="book-title fs-21 fw-600">
                        #ЛюбовьНенависть
                    </div>
                    <div class="book-author fs-19 fw-500">
                        Анна Джейн
                    </div>
                    <div class="book-price fs-22 fw-600">
                        22.36р
                    </div>
                    <div class="add-to-cart">
                        <input type="button" value="В корзину" class="btn btn-cart">
                    </div>
                </div>
                <div class="book-small">
                    <div class="book-cover">
                        <img src="{{asset('img/covers/ненависть-любось.png')}}" alt="">
                    </div>
                    <div class="book-title fs-21 fw-600">
                        #НенавистьЛюбовь
                    </div>
                    <div class="book-author fs-19 fw-500">
                        Анна Джейн
                    </div>
                    <div class="book-price fs-22 fw-600">
                        26.41р
                    </div>
                    <div class="add-to-cart">
                        <input type="button" value="В корзину" class="btn btn-cart">
                    </div>
                </div>
                <div class="book-small">
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
                    <div class="add-to-cart">
                        <input type="button" value="В корзину" class="btn btn-cart">
                    </div>
                </div>
                <div class="book-small">
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
                    <div class="add-to-cart">
                        <input type="button" value="В корзину" class="btn btn-cart">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
