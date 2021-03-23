@extends('layout')

@section('title', 'Регистрация')

@section('content')
    <div class="col-6">
        <div class="mt-3 mb-3">
            <form action="{{route('register_do')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="login" class="form-label">Логин:</label>
                    <input type="login" name="login" maxlength="20" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль:</label>
                    <input type="password" name="password" maxlength="20" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Зарегистрироватся</button>
            </form>
        </div>
    </div>
@endsection
