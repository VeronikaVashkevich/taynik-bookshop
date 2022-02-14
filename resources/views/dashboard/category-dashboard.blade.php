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
                <table>
                    @foreach($categories as $category)
                        <tr class="dashboard-table-row">
                            <td class="fs-26 fw-500 mb-40 ml-30 pl-25">{{ $category->name}}</td>
                            <td class="fs-26 fw-500 mb-40 pl-25"><a href="{{ route('categories.edit', $category->id) }}" class="color-dark-green">Редактировать</a></td>
                            <td class="fs-26 fw-500 mb-40 pl-25">
                                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
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
