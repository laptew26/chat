@extends('layout')

@section('title', 'Авторизация')

@section('content')
    <div class="col-6">
        <div class="mt-3 mb-3">
            <form action="{{route('login_do')}}" method="post">
                @csrf
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="login" class="form-label">Логин:</label>
                    <input type="login" name="login" maxlength="20" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль:</label>
                    <input type="password" name="password" maxlength="20" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>
@endsection
