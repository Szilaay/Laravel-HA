@extends('Layout.main')

@section('content')
<main class="container text-center pb-2">
    <p class="line-p fs-5">
        @foreach($routes as $data)
            <a class="line-number" style="background-color: {{$data -> hatterszin}};" href="/jaratok/{{$data -> jaratok_id}}"><span style="color: {{$data -> betuszin}}">{{$data -> jaratszam}}</span></a>
        @endforeach
    </p>
    <img class="img-fluid" src="{{asset('img/map_of_szeged.png')}}" alt="img/map_of_szeged.png">
</main>
@endsection