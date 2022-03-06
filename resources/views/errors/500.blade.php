<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favico.png') }}">
    <title>500 - Ошибка обращения к серверу</title>
</head>

<body>
@section('content')

    <div class="content">
        <section id="definition" class="container">
            <div class="d-flex flex-center" style="flex-direction: row">
                <div class="error-picture">
                    <img src="{{asset('img/errors/500.png')}}" alt="500">
                    <div class="copy-r">Designed by stories / Freepik</div>
                </div>
                <div class="error-text">
                    <div class="fs-35 fw-600 w-100p">Ошибка обращения к серверу</div>
                    <div class="fs-20 mt-40">Попробуйте перезагрузить страницу</div>
                    <div class="mt-60">
                        <a href="{{ url('/') }}" class="color-dark-green fs-22 fw-400">На главную</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
</body>
</html>

