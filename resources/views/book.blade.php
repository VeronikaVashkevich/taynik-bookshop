@extends('layouts')
    <!doctype html>
<html lang="en">

@section('title', 'Каталог книг')

<body>
@section('header')
    @parent
@endsection

@section('content')
    <div class="content">
        <section id="book" class="container">
            <div class="book-description">
                <div class="cover">
                    <img src="{{asset('img/covers/безумно%20богатые%20азиаты.png')}}" alt="обложка">
                </div>
                <div class="pl-80 d-flex f-wrap">
                    <div class="justify-content-sb w-100p d-flex">
                        <div class="fs-35 fw-600 ">Безумно богатые азиаты</div>
                        <div class="fs24 fw-500 vendor-code">Арт.1546321</div>
                    </div>
                    <div class="fs-27 fw-500 mt-25">Кевин Кван, 2019</div>

                    <div class="book-price fs-35 w-100p fw-600">35.90</div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
</body>
</html>
