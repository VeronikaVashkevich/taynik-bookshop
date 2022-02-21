@extends('layouts.app')

@section('title', 'Добавить книгу')

@section('content')
    <div class="content">
        <div class="d-flex jc-center mb-60 mt-30">
            <div class="card">
                <div class="card-header fs-35 fw-600 mb-40">Добавить книгу</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/dashboard/store-new-book') }}" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            {{-- Артикул --}}
                            <div class="col-md-6">
                                <input id="vendor_code" type="number"
                                       class="form-control @error('vendor_code') is-invalid @enderror"
                                       name="vendor_code" required
                                       placeholder="Артикул">

                                @error('vendor_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Название --}}
                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" required
                                       placeholder="Название">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Обложка --}}
                            <div class="col-md-6">
                                <input id="image" type="file"
                                       class="form-control @error('image') is-invalid @enderror"
                                       name="image" required
                                       placeholder="Обложка">

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Автор --}}
                            <div class="col-md-6">
                                <input id="author" type="text"
                                       class="form-control @error('author') is-invalid @enderror"
                                       name="author" required
                                       placeholder="Автор">

                                @error('author')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Кол-во страниц --}}
                            <div class="col-md-6">
                                <input id="pages" type="number"
                                       class="form-control @error('pages') is-invalid @enderror"
                                       name="pages" required
                                       placeholder="Количество страниц">

                                @error('pages')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Цена --}}
                            <div class="col-md-6">
                                <input id="price" type="number"
                                       class="form-control @error('price') is-invalid @enderror"
                                       name="price" required
                                       placeholder="Цена">

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Акционная цена --}}
                            <div class="col-md-6">
                                <input id="price_sale" type="number"
                                       class="form-control @error('price_sale') is-invalid @enderror"
                                       name="price_sale" required
                                       placeholder="Акционная цена">

                                @error('price_sale')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Дата выхода--}}
                            <div class="col-md-6">
                                <input id="year" type="date"
                                       class="form-control @error('year') is-invalid @enderror"
                                       name="year" required
                                       placeholder="Дата выхода">

                                @error('year')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Категория --}}
                            <div class="col-md-6 genre">
                                <select name="genre" id="genre" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @error('genre')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Подкатегория --}}
                            <div class="col-md-6 sub_category">
                                <select name="sub_category" id="sub_category" class="form-control">
                                    <option value="Современная литература">Современная литература</option>
                                    <option value="Классика">Классика</option>
                                    <option value="Фантастика и фэнтези">Фантастика и фэнтези</option>
                                    <option value="Детективы">Детективы</option>
                                    <option value="Любовные романы">Любовные романы</option>
                                    <option value="Комиксы и манга">Комиксы и манга</option>
                                </select>

                                @error('sub_category')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Описание --}}
                            <div class="col-md-6">
                                <textarea name="description" class="form-control" id="description" cols="100"
                                          rows="15" placeholder="Описание"></textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Рейтинг --}}
                            <div class="col-md-6">
                                <input id="age" type="number" max="21" min="0"
                                       class="form-control @error('age') is-invalid @enderror"
                                       name="age" required
                                       placeholder="Рейтинг">

                                @error('age')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Длина книги --}}
                            <div class="col-md-6">
                                <input id="length" type="number"
                                       class="form-control @error('length') is-invalid @enderror"
                                       name="length" required
                                       placeholder="Длина книги, мм">

                                @error('length')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Ширина книги --}}
                            <div class="col-md-6">
                                <input id="width" type="number"
                                       class="form-control @error('width') is-invalid @enderror"
                                       name="width" required
                                       placeholder="Ширина книги, мм">

                                @error('width')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- переплет --}}
                            <div class="col-md-6">
                                <select name="cover" id="cover" class="form-control">
                                    <option value="hard">Твердый переплет</option>
                                    <option value="soft">Мягкий переплет</option>
                                </select>
                                @error('cover')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Страна выпуска --}}
                            <div class="col-md-6">
                                <select name="country" id="country" class="form-control">
                                    <option value="foreign">Зарубежная литература</option>
                                    <option value="russian">Русская литература</option>
                                </select>
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-auth">
                                        Добавить
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#genre').change(function () {
                if ( $('#genre').find(":selected").text() !== 'Бестселлеры' && $('#genre').find(":selected").text() !== 'Художественная литература') {
                    $('.sub_category').hide();
                } else {
                    $('.sub_category').show();
                }
            })
        });
    </script>
@endsection
