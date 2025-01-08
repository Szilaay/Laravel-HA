<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
</head>
<body>
    <nav>
        <div class="logo">
            {{-- <img src="assets/Logo64x64.png" alt="logo" /> --}}
            {{-- Főoldal
                Kanok
                Szukák
                Fiatalok
                Fekete
                Hosszú szőrű
                Aktuális almok
                Archívum
                Eladó kutya
                Kapcsolat
            --}}
            <h1>Neu Garmond Kennel</h1>
        </div>
        <ul>
            <li><a href="#">Főoldal</a></li>
            <li><a href="#">Kanok</a></li>
            <li><a href="#">Szukák</a></li>
            <li><a href="#">Fiatalok</a></li>
            <li><a href="#">Fekete</a></li>
            <li><a href="#">Hosszú szőrű</a></li>
            <li><a href="#">Aktuális almok</a></li>
            <li><a href="#">Archívum</a></li>
            <li><a href="#">Eladó kutya</a></li>
            <li><a href="#">Kapcsolat</a></li>
        </ul>
        <div class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </nav>
    <div class="menubar">
        <ul>
            <li><a href="#">Főoldal</a></li>
            <li><a href="#">Kanok</a></li>
            <li><a href="#">Szukák</a></li>
            <li><a href="#">Fiatalok</a></li>
            <li><a href="#">Fekete</a></li>
            <li><a href="#">Hosszú szőrű</a></li>
            <li><a href="#">Aktuális almok</a></li>
            <li><a href="#">Archívum</a></li>
            <li><a href="#">Eladó kutya</a></li>
            <li><a href="#">Kapcsolat</a></li>
        </ul>
    </div>
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
</body>
</html>