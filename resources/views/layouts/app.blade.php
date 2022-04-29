<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="app" style="background-image: url({{ asset('assets/144p-garfield.gif') }})">
    <div class="content">
        <nav class="navbar">
            <a href="{{ route('feed') }}">Home</a>
            <a href="{{ route('my') }}">My account</a>
            <a href="{{ route('add-crime-page') }}">Add crime</a>
            <a href="{{ route('add-weapon') }}">Add weapon</a>
            <a href="{{ route('stat') }}">Stats</a>
        </nav>
        <div class="welcome-div">
            <img src="{{ asset('assets/dallas.gif') }}" alt="dallas">
            <p class="welcome-title">Welcome on {{ config('app.name') }}</p>
            <img src="{{ asset('assets/dallas.gif') }}" alt="dallas">
        </div>
        <div class="container-audio">
            <audio controls autoplay loop id="playAudio">
                <source src="{{ asset('assets/wii-theme-earrape.mp3') }}">
            </audio>
        </div>
        <br>
        <div class="login-form">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" style="margin-right: 16px">
                    Login
                </a>
                <a href="{{ route('register') }}">
                    Register
                </a>
            @endauth
        </div>
        <div>
            {{ $slot }}
        </div>
    </div>
    <div class="medias-gifs">
        <img src="https://media.giphy.com/media/1oE3Ee4299mmXN8OYb/giphy.gif" class="image">
        <br>
        <video controls width="300" loop autoplay muted>
            <source src=" {{ asset('assets/dogo.mp4') }}" type="video/mp4">
        </video>
        <br>
        <a href="https://twitter.com/3Dgifdubstep" target="_blank">⚠️⚠️BEST TWITTER ACCOUNT ⚠️⚠️</a>
    </div>

</body>

</html>
