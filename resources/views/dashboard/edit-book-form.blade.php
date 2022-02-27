@extends('layouts.app')

@section('title', 'Редактировать книгу')

@section('content')
    <div class="content">
        <div class="d-flex jc-center mb-60 mt-30">
            <div class="card">
                <div class="card-header fs-35 fw-600 mb-40">Редактировать книгу {{ $book->name }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('books.update', $book->id) }}" class="form" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="vendor_code" type="number"
                                       class="form-control @error('vendor_code') is-invalid @enderror"
                                       name="vendor_code" required value="{{ $book->vendor_code }}"
                                       placeholder="Артикул">

                                @error('vendor_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" required value="{{ $book->name }}"
                                       placeholder="Название">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
                            <div class="col-md-6">
                                <input id="author" type="text"
                                       class="form-control @error('author') is-invalid @enderror"
                                       name="author" required value="{{ $book->author }}"
                                       placeholder="Автор">

                                @error('author')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="pages" type="number"
                                       class="form-control @error('pages') is-invalid @enderror"
                                       name="pages" required value="{{ $book->pages }}"
                                       placeholder="Количество страниц">

                                @error('pages')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="price" type="number"
                                       class="form-control @error('price') is-invalid @enderror"
                                       name="price" required value="{{ $book->price }}" step="0.01"
                                       placeholder="Цена">

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="price_sale" type="number"
                                       class="form-control @error('price_sale') is-invalid @enderror"
                                       name="price_sale" value="{{ $book->price_sale }}" step="0.01"
                                       placeholder="Акционная цена">

                                @error('price_sale')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="year" type="date"
                                       class="form-control @error('year') is-invalid @enderror"
                                       name="year" required value="{{ $book->year }}"
                                       placeholder="Год выпуска">

                                @error('year')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
                            <div class="col-md-6">
                                <textarea name="description" class="form-control" id="description" cols="100"
                                          rows="15" placeholder="Описание">{{ $book->description }}"</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="age" type="number" max="21" min="0"
                                       class="form-control @error('age') is-invalid @enderror"
                                       name="age" required value="{{ $book->age }}"
                                       placeholder="Рейтинг">

                                @error('age')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="length" type="number"
                                       class="form-control @error('length') is-invalid @enderror"
                                       name="length" required value="{{ $book->length }}"
                                       placeholder="Длина книги, мм">

                                @error('length')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="width" type="number"
                                       class="form-control @error('width') is-invalid @enderror"
                                       name="width" required value="{{ $book->width }}"
                                       placeholder="Ширина книги, мм">

                                @error('width')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <select name="cover" id="cover" class="form-control">
                                    <option value="hard" @if($book->cover == "hard") selected @endif>Твердый переплет</option>
                                    <option value="soft" @if($book->cover == "soft") selected @endif>Мягкий переплет</option>
                                </select>
                                @error('cover')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <select name="country" id="country" class="form-control">
                                    <option value="foreign" @if($book->country == "foreign") selected @endif>Зарубежная литература</option>
                                    <option value="russian" @if($book->country == "russian") selected @endif>Русская литература</option>
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
                                        Сохранить
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
