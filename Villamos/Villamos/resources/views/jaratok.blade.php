@extends('Layout.main')

@section('content')
<main class="container fs-5">
    <div>
        <h1 class="display-6 py-3">Tram-train</h1>
        <table class="table">
            <tr class="table-dark">
                <th style="width: 10%;">Járatszám</th>
                <th>Útvonal</th>
            </tr>
            <tbody>
                @foreach($result as $r)
                    @if($r -> jarat_tipus == 1)
                    <tr>
                        <td class="text-center"><a href="/jarat/{{$r -> jaratok_id}}">{{$r -> jaratszam}}</a></td>
                        <td>{{ $r -> jarat_leiras }}</td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <h1 class="display-6 py-3">Villamos</h1>
        <table class="table">
            <tr class="table-dark">
                <th style="width: 10%;">Járatszám</th>
                <th>Útvonal</th>
            </tr>
            <tbody>
                @foreach($result as $r)
                    @if($r -> jarat_tipus == 2)
                    <tr>
                        <td class="text-center"><a href="/jarat/{{$r -> jaratok_id}}">{{$r -> jaratszam}}</a></td>
                        <td>{{ $r -> jarat_leiras }}</td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <h1 class="display-6 py-3">Trolibusz</h1>
        <table class="table">
            <tr class="table-dark">
                <th style="width: 10%;">Járatszám</th>
                <th>Útvonal</th>
            </tr>
            <tbody>
                @foreach($result as $r)
                    @if($r -> jarat_tipus == 3)
                    <tr>
                        <td class="text-center"><a href="/jarat/{{$r -> jaratok_id}}">{{$r -> jaratszam}}</a></td>
                        <td>{{ $r -> jarat_leiras }}</td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection