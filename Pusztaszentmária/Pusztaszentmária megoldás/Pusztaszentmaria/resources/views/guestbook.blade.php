@extends('Layouts.main')

@section('content')
    <div class="col-md-9">
        <h1 class="text-center pt-3">Vendégkönyv</h1>

        @guest
            <h3 class="text-danger text-center">A vendégkönyvbe való bejegyzéshez be kell jelentkezned!</h3>
        @else
            
        @endguest

        <hr>

        @foreach ($guestbook as $item)
            <h5>{{ $item -> nev}} - <a href="mailto:{{ $item -> email }}"> {{ $item -> email }} </a></h5>
            <p> {{ date('Y. m. d.', strtotime($item -> date)) }} </p>
            <p> {{ $item -> message }} </p>
        @endforeach
    </div>
@endsection