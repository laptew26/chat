<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--    CSS--}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    {{--    JS--}}
    <script src="/js/bootstrap.bundle.js" defer></script>
    <script src="/js/jquery-3.5.1.min.js" defer></script>
    <script src="/js/main.js" defer></script>

    <title>@yield('title')</title>
</head>
<body>
<div class="wrapper">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <span class="navbar-brand">Facebuk</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}">Выйти</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Авторизация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register_show')}}">Регистрация</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container content">
        @yield('content')
    </main>
    <footer class="container-fluid">
        <p>Здравия желаем в самом современном(нет) чате</p>
    </footer>
</div>
</body>
</html>
