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
                        <form action="{{ route('bookList', 'Бестселлеры') }}" method="post">
                            @csrf
                            <input type="hidden" name="category" value="Бестселлеры">
                            <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Бестселлеры</button>
                        </form>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Современная литература') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Бестселлеры">
                                <input type="hidden" name="sub_category" value="Современная литература">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Совремемнная литература</button>
                            </form>
                        </li>
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Современная литература') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Бестселлеры">
                                <input type="hidden" name="sub_category" value="Классика">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Классика</button>
                            </form>
                        </li>
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Современная литература') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Бестселлеры">
                                <input type="hidden" name="sub_category" value="Фантастика и фэнтези">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Фантастика и фэнтези</button>
                            </form>
                        </li>
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Детективы') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Бестселлеры">
                                <input type="hidden" name="sub_category" value="Детективы">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Детективы</button>
                            </form>
                        </li>
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Любовные романы') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Бестселлеры">
                                <input type="hidden" name="sub_category" value="Любовные романы">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Любовные романы</button>
                            </form>
                        </li>
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Комиксы и манга') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Бестселлеры">
                                <input type="hidden" name="sub_category" value="Современная литература">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Комиксы и манга</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/art-ico.png') }}" alt="" class="menu-icon">
                        Художественная литература
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Современная литература') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Художественная литература">
                                <input type="hidden" name="sub_category" value="Современная литература">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Совремемнная литература</button>
                            </form>
                        </li>
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Современная литература') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Художественная литература">
                                <input type="hidden" name="sub_category" value="Классика">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Классика</button>
                            </form>
                        </li>
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Современная литература') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Художественная литература">
                                <input type="hidden" name="sub_category" value="Фантастика и фэнтези">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Фантастика и фэнтези</button>
                            </form>
                        </li>
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Детективы') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Художественная литература">
                                <input type="hidden" name="sub_category" value="Детективы">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Детективы</button>
                            </form>
                        </li>
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Любовные романы') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Художественная литература">
                                <input type="hidden" name="sub_category" value="Любовные романы">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Любовные романы</button>
                            </form>
                        </li>
                        <li class="submenu-item">
                            <form action="{{ route('bookList', 'Комиксы и манга') }}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="Художественная литература">
                                <input type="hidden" name="sub_category" value="Современная литература">
                                <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Комиксы и манга</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/business-Icon.png') }}" alt="" class="menu-icon">
                        <form action="{{ route('bookList', 'Бизнес') }}" method="post">
                            @csrf
                            <input type="hidden" name="category" value="Бизнес">
                            <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Бизнес</button>
                        </form>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/psy-Icon.png') }}" alt="" class="menu-icon">
                        <form action="{{ route('bookList', 'Психология') }}" method="post">
                            @csrf
                            <input type="hidden" name="category" value="Психология">
                            <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Психология</button>
                        </form>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/science-Icon.png') }}" alt="" class="menu-icon">
                        <form action="{{ route('bookList', 'Научно-популярная психология') }}" method="post">
                            @csrf
                            <input type="hidden" name="category" value="Научно-популярная психология">
                            <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Научно-популярная психология</button>
                        </form>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-item-title fs-24 fw-500 mb-40" href="#">
                        <img src="{{ asset('img/icons/study-icon.png') }}" alt="" class="menu-icon">
                        <form action="{{ route('bookList', 'Учебная литература') }}" method="post">
                            @csrf
                            <input type="hidden" name="category" value="Учебная литература">
                            <button type="submit" class="fs-24 fw-400 mb-25 bg-white border-none cursor-pointer">Учебная литература</button>
                        </form>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
