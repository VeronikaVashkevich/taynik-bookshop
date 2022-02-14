@extends('layouts.app')

@section('title', 'Редактировать категорию')

@section('content')
    <div class="content">
        <div class="d-flex jc-center mb-60 mt-30">
            <div class="card">
                <div class="card-header fs-35 fw-600 mb-40">Редактировать категорию {{ $category->name }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.update', $category->id) }}" class="form">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" required autofocus value="{{ $category->name }}"
                                       placeholder="Название категории">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-auth">
                                        Сохранить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
