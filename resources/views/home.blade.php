@extends('layout')

@section('title', 'Мои сообщения')

@section('content')
    <div class="row">
        <div class="col-2">
            @include('users')
        </div>
    </div>
@endsection
