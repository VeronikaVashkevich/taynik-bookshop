<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favico.png') }}">
    <title>@yield('title')</title>
</head>

<body>

@section('header')
    <header>
        <div class="site-title">
            <a href="{{ url('/') }}" style="color: inherit">Тайник</a>
        </div>
        <section id="header">
            <ul class="header-content header-content-info">
                <li class="header-el wishes">
                    Желаем вам удачных покупок и отличного настроения!
                </li>
                <li class="header-el time">
                    Пн-вс: 09.00 - 21.00
                </li>
                <li class="header-el phone">
                    <img src="{{asset('img/icons/phone-icon.png')}}" alt="phone icon" class="img-icon phone-icon">
                    754-33-23
                </li>
            </ul>
            <ul class="header-content header-content-blocks">
                <li class="header-el menu-icon flex-center">
                    <a href="{{ url('/menu')}}">
                        <img src="{{asset('img/icons/menu-icon.png')}}" alt="menu icon" class="img-icon">
                    </a>
                </li>
                <li class="header-el search-form">
                    <form action="{{ route('search') }}" method="get" class="search">
                        <input type="text" name="search_field" id="search_field" class="form-input search" placeholder="Книга, автор" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif>
                    </form>
                </li>
                @auth
                    <li class="header-el profile flex-center">
                        <a href="{{ url('/logout') }}">
                            <img src="{{asset('img/icons/user-icon.png')}}" alt="user icon" class="img-icon">
                        </a>
                        <div class="icon-text">
                            <a class="color-dark-green" href="{{ url('/logout') }}">Выйти</a>
                        </div>
                    </li>
                @else
                    <li class="header-el profile flex-center">
                        <a href="{{ url('/login') }}">
                            <img src="{{asset('img/icons/user-icon.png')}}" alt="user icon" class="img-icon">
                        </a>
                        <div class="icon-text">
                            <a class="color-dark-green" href="{{ url('/login') }}">Войти</a>
                        </div>
                    </li>
                @endauth
                <li class="header-el cart-icon flex-center">
                    <div class="cart-amount">
                    <a href="{{ url('/cart') }}" class="cart-link">
                        <img src="{{asset('img/icons/cart-ico.png')}}" alt="cart icon" class="img-icon">
                        <div class="quantity fs-16">
                            {{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity()}}
                        </div>
                    </a>
                    <div class="icon-text">
                        <a href="{{ url('/cart') }}" class="color-dark-green"> Корзина </a>
                    </div>
                    </div>
                </li>
            </ul>
        </section>
    </header>
@show

@yield('content')

@section('footer')
    <footer>
        <div class="container f-between footer">
            <div class="left">
                <div class="copyright">
                    ООО “Тайник”, 2017- {{ date('Y') }}
                </div>
                <div class="slogan">
                    Дарим радость всем и каждому
                </div>
            </div>
            <div class="right">
                <div class="contact-operator fw-500">
                    А1, МТС, Life:)
                </div>
                <div class="contact-phone fw-600">
                    754-33-23
                </div>
            </div>
        </div>
    </footer>
@show

</body>
</html>
