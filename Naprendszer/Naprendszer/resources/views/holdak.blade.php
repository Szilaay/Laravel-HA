@extends('layouts.layout')
@section('content')
<main class="container pb-2">
    <p class="pt-4 text-center">
        @foreach ($bolygok as $row)
            <a class="btn btn-dark" href="/holdak/{{$row->bolygok_id}}">{{ $row->nev }}</a>
        @endforeach
    </p>

    @if(isset($bolygok_data))
    <div class="container">
        <h1 class="py-3 text-center display-6">{{ $bolygok_data->nev }}</h1>
        <div class="row">
            <div class="col-sm">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Név</th>
                            <th>Felfedezés</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bolygok_data->holdak as $index => $hold)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $hold -> nev }}</td>
                            <td>{{ $hold ->  felfedezes}}</td>
                            <td><a class="btn btn-dark" href="/holdak/{{ $hold->holdak_id }}/edit">Módosítás</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
</main>
@endsection