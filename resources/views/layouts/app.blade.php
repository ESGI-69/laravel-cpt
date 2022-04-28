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
    <body class="app">
        <div class="content">
            <audio controls autoplay loop id="playAudio">
                <source src="{{ asset('assets/wii-theme-earrape.mp3') }}">
            </audio>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}">
                    Login
                </a>
                <a href="{{ route('register') }}">
                    Register
                </a>
            @endauth
            <div>
                {{ $slot  }}
            </div>
        </div>
        <div class="medias-gifs">
          <img src="https://media.giphy.com/media/1oE3Ee4299mmXN8OYb/giphy.gif" class="image">
          <br>
          <video controls width="300" loop autoplay muted>
            <source src="assets/dogo.mp4" type="video/mp4">
          </video>
          <br>
          <a href="https://twitter.com/3Dgifdubstep" target="_blank">⚠️⚠️BEST TWITTER ACCOUNT ⚠️⚠️</a>
        </div>
        
    </body>
</html>
