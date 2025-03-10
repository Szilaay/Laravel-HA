@extends('Layout.main')

@section('content')

<main class="container text-center pb-2">
    <h1 class="text-center display-6 py-3">{{ $nev -> nev }}</h1>
    <p class="text-center fs-5">Járatok:</p>

    <p class="line-p fs-5">
        @foreach($jaratok as $data)
            <a class="line-number" style="background-color: {{$data -> hatterszin}};" href="/jarat/{{$data -> jaratok_id}}"><span style="color: {{$data -> betuszin}}">{{$data -> jaratszam}}</span></a>
        @endforeach
    </p>

</main>
@endsection