@extends('layout')
@section('content')
<main class="container pb-2">
    <h1 class="py-3 text-center display-6">Cuki macskás kép</h1>
    @isset($records)
        <div class="alert alert-success">
            {{ $records }}
        </div>    
    @endisset
    @guest
        <p class="fs-5">
            Lépj be, hogy lásd a képet!
        </p>
    @else
        <p class="text-center fs-5">
            <img src="{{ asset('assets/img/cat-3336579_1280.jpg') }}" alt="cat-3336579_1280.jpg" title="Cuki macskás kép" class="w-100">
        </p>
    @endguest
</main>
@endsection
