@extends('layout')

@section('title')
    Чат с {{$user->login}}
@endsection

@section('content')
    <hr>
    <form>
        @csrf
        <div class="mb-3">
            <label for="text">Написать:</label>
            <input type="text" id="text" maxlength="80" class="form-control" name="text">
        </div>
        <input type="text" value="{{$user->id}}" id="recipient_id" hidden>
        <button type="button" id="send" class="btn btn-primary">Отправить</button>
    </form>
    <hr>
    <div id="messages">
    </div>
@endsection
