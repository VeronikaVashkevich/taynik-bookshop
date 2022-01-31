@extends('layouts/app')

@section('title', 'Книга')

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
                        <div class="fs-24 fw-500 vendor-code">Арт.1546321</div>
                    </div>
                    <div class="fs-27 fw-500 mt-16">Кевин Кван, 2019</div>
                    <div class="book-price fs-35 w-100p fw-600">35.90</div>
                    <div class="w-100p">
                        <div class="fs-24 fw-500 align-self-end">Товар на складе</div>
                        <div class="fs-24 fw-500 stock align-self-end">Наличие в магазинах</div>
                    </div>
                    <button class="btn btn-cart-big">Положить в корзину</button>
                </div>
            </div>
            <div class="mt-75">
                <div class="fs-30 fw-600">Описание</div>
                <div class="mt-25 fs-22 fw-500 lh-30">
                    Жительница Нью-Йорка Рейчел Чу планирует провести все лето в Сингапуре вместе со своим
                    бойфрендом Ником Янгом. Но Ник не рассказал Рейчел о том, что его семья сказочно богата, а он -
                    самый завидный жених
                    в стране. Отдых, который планировался как тихое семейное время, оборачивается полосой
                    препятствий, собранных из старых и новых денег, сложных отношений с родственниками и интригующих
                    карьеристов.
                </div>
            </div>
            <div class="mt-70">
                <div class="fs-30 fw-600">Характеристики</div>
            </div>
            <div class="mt-30">
                <table class="specifications">
                    <tr class="spec">
                        <td class="spec-key">Переплет</td>
                        <td class="spec-value">Твердный</td>
                    </tr>
                    <tr class="spec">
                        <td class="spec-key">Возраст</td>
                        <td class="spec-value">16+</td>
                    </tr>
                    <tr class="spec">
                        <td class="spec-key">Страниц</td>
                        <td class="spec-value">480</td>
                    </tr>
                    <tr class="spec">
                        <td class="spec-key">Формат</td>
                        <td class="spec-value">130х205 мм</td>
                    </tr>
                    <tr class="spec">
                        <td class="spec-key">Год издания</td>
                        <td class="spec-value">2019</td>
                    </tr>
                </table>
            </div>

            <div class="mt-80 mb-60">
                <div class="d-flex w-100p justify-content-sb v-align-bottom">
                    <div class="fs-30 fw-600">Отзывы</div>
                    <a class="fs-24 fw-500 color-dark-green" href="#">Оставить отзыв</a>
                </div>
                <div class="review">
                    <div class="fs-22 fw-600">Костя</div>
                    <div class="mt-16 fs-22 fw-500">
                        Книга пришла в отличном состоянии. Рекомундую к прочтению. Наверное лучшее, что я читал за
                        последний месяц.
                    </div>
                </div>
                <div class="review">
                    <div class="fs-22 fw-600">Алексей</div>
                    <div class="mt-16 fs-22 fw-500">
                        Я в полном восторге! Книга читается залпом. Обязательно куплю остальные части цикла. Думаю будет
                        интересно прочесть их в Сингапуре:)) Книга пришла в отличном состоянии, доставили быстро.
                    </div>
                </div>
            </div>
        </section>

        <section id="similar" class="container">
            <div class="d-flex justify-content-start">
                <div class="book-small pr-90">
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
                </div>
                <div class="book-small pr-90">
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
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
