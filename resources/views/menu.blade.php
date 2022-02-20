@extends('layouts/app')

@section('title', 'Меню')

@section('header')
    @parent
@endsection

@section('content')
    <div class="content">
        <section id="menu" class="container">
            <div class="menu">
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/top-ico.png') }}" alt="" class="menu-icon">
                        Бестселлеры
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item fs-24 fw-400 mb-25">совремемнная литература</li>
                        <li class="submenu-item fs-24 fw-400 mb-25">классика</li>
                        <li class="submenu-item fs-24 fw-400 mb-25">фантастика и фэнтези</li>
                        <li class="submenu-item fs-24 fw-400 mb-25">детективы</li>
                        <li class="submenu-item fs-24 fw-400 mb-25">любовные романы</li>
                        <li class="submenu-item fs-24 fw-400 mb-25">комиксы и манга</li>
                    </ul>
                </div>
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/art-ico.png') }}" alt="" class="menu-icon">
                        Художественная литература
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item fs-24 fw-400 mb-25">совремемнная литература</li>
                        <li class="submenu-item fs-24 fw-400 mb-25">классика</li>
                        <li class="submenu-item fs-24 fw-400 mb-25">фантастика и фэнтези</li>
                        <li class="submenu-item fs-24 fw-400 mb-25">детективы</li>
                        <li class="submenu-item fs-24 fw-400 mb-25">любовные романы</li>
                        <li class="submenu-item fs-24 fw-400 mb-25">комиксы и манга</li>
                    </ul>
                </div>
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/business-Icon.png') }}" alt="" class="menu-icon">
                        Бизнес
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/psy-Icon.png') }}" alt="" class="menu-icon">
                        Психология
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/science-Icon.png') }}" alt="" class="menu-icon">
                        Научно-популярная литература
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/study-icon.png') }}" alt="" class="menu-icon">
                        Учебная литература
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
