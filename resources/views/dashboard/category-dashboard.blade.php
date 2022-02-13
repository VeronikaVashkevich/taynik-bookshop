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
        <section id="categoryPanel" class="container">
            <div class="d-flex justify-content-sb w-100p">
                <div class="fs-35 fw-600">Список категорий</div>
                <div>
                    <a href="{{ route('categories.create') }}" class="btn btn-cart-big"
                       style="padding-left: 20px; padding-right: 20px;">Добавить</a>
                </div>
            </div>
            <div class="mt-30"></div>
            <div class="section-content">
                <ul>
                    @foreach($categories as $category)
                        <li class="fs-26 fw-500 mb-25 ml-30">{{ $category->name}}</li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
@endsection
