@extends('Layout.main')

@section('content')
<main class="container pb-2">
    <p class="pt-4 text-center">
        @foreach ($data as $rows)
            <a class="btn btn-outline-dark" href="/orszagok/{{ $rows -> kontinens_id }}">{{ $rows->nev }}</a>
        @endforeach
    </p>

    <h2 class="py-3 text-center display-6">{{ $data_find -> nev }} országai</h2>

    <div class="table-responsive text-nowrap">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>#</th>
                    <th>Név</th>
                    <th>Főváros</th>
                    <th>Népesség</th>
                    <th>Terület</th>
                    <th>Népsűrűség</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $szucsi = 1;
                @endphp
                @foreach ($country as $row)
                <tr>
                    <td class="text-center"> {{ $szucsi }} </td>
                    <td> {{ $row -> nev }} </td>
                    <td> {{ $row -> fovaros }} </td>
                    <td> {{ number_format($row -> nepesseg, 0, '', ' ') }} fő</td>
                    <td>
                        @if($row -> terulet == 0)
                            kisebb mint 1 km<sup>2</sup>
                        @else
                            {{ number_format($row -> terulet, 0, '', ' ') }} km<sup>2</sup>
                        @endif
                    </td>
                    <td> {{ number_format($row -> nepsuruseg, 0, '', ' ') }} fő/km<sup>2</sup></td>
                </tr>
                @php
                    $szucsi++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection