@extends('layouts/app')

@section('title', 'Каталог книг')

@section('header')
    @parent
@endsection

@section('content')
    <div class="content">
        @if (count($books) != 0)
            <section id="filters" class="container">
                <div class="section-subtitle">
                    Фильтр
                </div>
                <div class="section-content">
                    <form action="{{ route('filterByParams') }}" method="post">
{{--                        {!! csrf_field() !!}--}}
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
                                            <input type="checkbox" name="country" id="foreign" value="foreign" class="form-checkbox">
                                            <label for="foreign"></label>
                                            <span class="fake_label">Зарубежная литература</span>
                                        </li>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="country" id="russian" value="russian" class="form-checkbox">
                                            <label for="russian"></label>
                                            <span class="fake_label">Русская литература</span>
                                        </li>
                                    </ul>
                                </td>
                                <td class="filter-group">
                                    <ul>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="cover" value="hard" class="form-checkbox" id="hardCover">
                                            <label for="hardCover"></label>
                                            <span class="fake_label">Твердый переплет</span>
                                        </li>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="cover" value="soft" class="form-checkbox" id="softCover">
                                            <label for="softCover"></label>
                                            <span class="fake_label">Мягкий переплет</span>
                                        </li>
                                    </ul>
                                </td>
                                <td class="filter-group">
                                    <ul>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="year" value="2022" class="form-checkbox" id="year2022">
                                            <label for="year2022"></label>
                                            <span class="fake_label">2022</span>
                                        </li>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="year" value="2021" class="form-checkbox" id="year2021">
                                            <label for="year2021"></label>
                                            <span class="fake_label">2021</span>
                                        </li>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="year" value="2020" class="form-checkbox" id="year2020">
                                            <label for="year2020"></label>
                                            <span class="fake_label">2020</span>
                                        </li>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="year" value="2019" class="form-checkbox" id="year2019">
                                            <label for="year2019"></label>
                                            <span class="fake_label">2019</span>
                                        </li>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="year" value="2018" class="form-checkbox" id="year2018">
                                            <label for="year2018"></label>
                                            <span class="fake_label">2018</span>
                                        </li>
                                    </ul>
                                </td>
                                <td class="filter-group">
                                    <ul>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="inStock" value="inStock" class="form-checkbox" id="inStock">
                                            <label for="inStock"></label>
                                            <span class="fake_label">На складе</span>
                                        </li>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="inStock" value="order" class="form-checkbox" id="order">
                                            <label for="order"></label>
                                            <span class="fake_label">Под заказ</span>
                                        </li>
                                        <li class="filter-parameter fw-500 mt-16">
                                            <input type="checkbox" name="inStock" value="outOfStock" class="form-checkbox" id="outOfStock">
                                            <label for="outOfStock"></label>
                                            <span class="fake_label">Нет в продаже</span>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <div class="sorting">

                    </div>
                </div>
            </section>

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
                                <a href="{{ route('addToCart', ['id' => $book->id]) }}">
                                    <input type="button" value="В корзину" class="btn btn-cart">
                                </a>
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

        <script>
            $(document).ready(function () {
                $('.form-checkbox').each(function() {
                    $(this).click(function () {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            url: '{{ route('bookList') }}',
                            type: "GET",
                            data: {
                                '_token': $('meta[name="csrf-token"]').attr('content'),
                                data: $('.form-checkbox:checked').serialize(),
                                'category': '<?php echo $_GET['category'] ?>',
                                'sub_category': '<?php echo !empty($_GET['sub_category']) ? $_GET['sub_category'] : '' ?>'
                            },
                            success: (data)=> {
                                $('#catalog').html(data);
                            }
                        })
                    })
                })
            })
        </script>
@endsection

@section('footer')
    @parent
@endsection
