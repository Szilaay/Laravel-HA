@extends('layout')

@section('title')
    Főoldal
@endsection

@section('content')
    <main class="container pb-2">
        <h1 class="py-3 text-center display-6"><b>Login</b></h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @guest
            <p class="text-center fs-5">Lépj be hogy láthasd az oldal tartalmát</p>
        @else
            <h2 class="py-3 text-center display-6">Üdvözöllek, {{ Auth::user()->name }}!</h2>
            <img src=" {{ asset('assets/img/dogs.png') }} " alt="login" class="img-fluid w-100">
        @endguest
    </main>
@endsection

@section('footer-text')
    Főoldal
@endsection


