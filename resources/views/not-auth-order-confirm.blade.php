@extends('layouts.app')

@section('title', 'Подтверждение заказа')

@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h1>Ваш заказ принят в обработку, с вами свяжется наш оператор</h1>

                    <div class="fs-24 mt-40">
                        <a href="{{ url('/') }}" class="color-dark-green">На главную</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
