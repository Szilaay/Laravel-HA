@extends('Layout.main')
@section('content')
<main class="container pb-2">

    <p class="line-p fs-5 mt-5"><span class="line-number" style="background-color: {{ $jarat -> hatterszin}};"><span style="color: {{ $jarat -> betuszin }};">{{ $jarat -> jaratszam}}</span></span>{{ $jarat -> jarat_leiras }}
    </p>

    <div class="row">
        <div class="col-md">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th colspan="2">Megállók oda:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($megallok as $data)
                        @if ($data -> utirany == 'o')
                            <tr>
                                <td class="text-center" style="width: 10%;">{{$sv1++}}</td>
                                <td><a href="/megallo/{{$data -> megallo_id}}">{{$data->nev}}</a></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        @php $sv1 = 1 @endphp
        <div class="col-md">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th colspan="2">Megállók vissza:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($megallok as $data)
                        @if ($data -> utirany == 'v')
                            <tr>
                                <td class="text-center" style="width: 10%;">{{$sv1++}}</td>
                                <td><a href="/megallo/{{$data -> megallo_id}}">{{$data->nev}}</a></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</main>
@endsection