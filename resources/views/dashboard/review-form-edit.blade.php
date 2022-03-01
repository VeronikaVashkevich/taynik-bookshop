@extends('layouts.app')

@section('title', 'Добавить книгу')

@section('content')
    <div class="content">
        <div class="d-flex jc-center mb-60 mt-30">
            <div class="card">
                <div class="card-header fs-35 fw-600 mb-40">Редактировать текст отзыва</div>
                <div class="card-body">
                    <form action="{{ route('reviews.update', $review->id) }}" method="post" class="form">
                        @csrf
                        @method('PUT')
                        <textarea name="text" id="text" cols="30" rows="10" class="form-control"></textarea>
                        <button type="submit" class="btn btn-cart">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
