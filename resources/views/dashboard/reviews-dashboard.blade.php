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
                <div class="fs-35 fw-600">Отзывы</div>
            </div>
            <div class="mt-30"></div>
            <div class="section-content">
                <table style="border-collapse:separate; border-spacing: 0 1em;">
                    <tr>
                        <td class="fs-26 fw-600 mb-60 ml-30 pl-25">Книга</td>
                        <td class="fs-26 fw-600 mb-60 ml-30 pl-25">Автор</td>
                        <td class="fs-26 fw-600 mb-60 ml-30 pl-25">Текст отзыва</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @foreach($reviews as $review)
                        <tr class="dashboard-table-row vertical-align-top"">
                            <td class="fs-20 fw-500 mb-40 ml-30 pl-25">{{ $review->book->name }}</td>
                            <td class="fs-20 fw-500 mb-40 ml-30 pl-25">{{ $review->user->name }}</td>
                            <td class="fs-18 fw-500 mb-40 ml-30 pl-25">{{ $review->text}}</td>
                            <td class="fs-24 fw-500 mb-40 pl-25"><a href="{{ route('reviews.edit', $review->id) }}" class="color-dark-green">Редактировать</a></td>
                            <td class="fs-24 fw-500 mb-40 pl-25">
                                <form action="{{ route('reviews.destroy', $review->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Удалить" class="btn btn-link-danger" style="padding-left: 30px; padding-right: 30px">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </section>
    </div>
@endsection
