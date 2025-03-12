@extends('Layout.app')
@section('content')
    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">{{ $etel->nev }}</h1>
        <div class="row fs-5">
            <div class="col-md">
                <img src="{{ asset('img/' . $etel->etelid . '.jpg') }}" class="w-100 img-fluid">
            </div>
            <div class="col-md">
                <p>Hozzávalók: </p>
                <ul>
                    @foreach ($hozzavalok as $data)
                    <li>
                        {{$data -> mennyiseg}} {{$data -> mennyegyseg}} {{$data -> nev}}
                    </li>
                    @endforeach
                </ul>
                <p>Elkészítési idő: {{$etel->elkeszitesiido}} perc</p>
                <p>Elkészítés: {{$etel->leiras}}</p>
            </div>
        </div>
    </main>
@endsection
