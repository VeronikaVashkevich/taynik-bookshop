<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <script src="{{asset('js/common.js')}}"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favico.png') }}">
    <title>@yield('title')</title>
</head>

<body>

@section('header')
    <header>
        <div class="site-title">
            Тайник
        </div>
        <section id="header">
            <ul class="header-content">
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
            <ul class="header-content">
                <li class="header-el menu-icon">
                    <img src="{{asset('img/icons/menu-icon.png')}}" alt="menu icon" class="img-icon">
                </li>
                <li class="header-el search-form">
                    <input type="text" name="search" id="search" class="form-input search" placeholder="Книга, автор">
                </li>
                <li class="header-el profile flex-center">
                    <a href="#">
                        <img src="{{asset('img/icons/user-icon.png')}}" alt="user icon" class="img-icon">
                    </a>
                    <div class="icon-text">
                        Войти
                    </div>
                </li>
                <li class="header-el cart-icon flex-center">
                    <a href="#">
                        <img src="{{asset('img/icons/cart-ico.png')}}" alt="cart icon" class="img-icon">
                    </a>
                    <div class="icon-text">
                        Корзина
                    </div>
                </li>
            </ul>
        </section>
    </header>
@show

@yield('content')

@section('footer')
    <footer>
        <div class="container f-between">
            <div class="left">
                <div class="copyright">
                    ООО “Тайник”, 2017-2021
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
