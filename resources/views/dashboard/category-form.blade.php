@extends('layouts.app')

@section('title', 'Добавить категорию')

@section('content')
    <div class="content">
        <div class="d-flex jc-center mb-60 mt-30">
            <div class="card">
                <div class="card-header fs-35 fw-600 mb-40">Добавить категорию</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}" class="form">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" required autofocus
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
                                        Добавить
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
