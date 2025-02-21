@extends('layouts.layout')
@section('content')
<main class="container pb-2">
    <p class="pt-4 text-center">
        @foreach ($bolygok as $row)
            <a class="btn btn-dark" href="/bolygok/{{$row->bolygok_id}}">{{ $row->nev }}</a>
        @endforeach
    </p>

    @if(isset($bolygok_data))
    <div class="container">
        <h1 class="py-3 text-center display-6">{{ $bolygok_data->nev }}</h1>
        <div class="row">
            <div class="col-sm">
                <img class="img-fluid" src="{{ asset(sprintf('img/%s.png', $bolygok_data->bolygok_id)) }}" alt="{{ $bolygok_data->nev }}">            </div>
            <div class="col-sm">
                <table class="table table-bordered table-striped">
                    <tbody>
                      <tr>
                        <th scope="row">Átlagos keringési távolság</th>
                        <td>{{ number_format($bolygok_data -> tavolsag, 0, '', ' ') }} km</td>
                      </tr>
                      <tr>
                        <th scope="row">Átlagos keringési sebesség</th>
                        <td>{{ number_format($bolygok_data -> sebesseg, 0, '', ' ') }} km/h</td>
                      </tr>
                      <tr>
                        <th scope="row">Egyenlítő sugara</th>
                        <td>{{ number_format($bolygok_data -> egyenlito, 0, '', ' ') }} km</td>
                      </tr>
                      <tr>
                        <th scope="row">Keringési idő</th>
                        <td>{{ $bolygok_data -> keringes }} nap</td>
                      </tr>
                      <tr>
                        <th scope="row">Légkör összetétele</th>
                        <td>{{ $bolygok_data -> atmoszfera }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Holdak száma</th>
                        <td>{{ $bolygok_data -> holdak -> count() }}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    @endif
</main>
@endsection